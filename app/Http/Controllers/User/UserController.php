<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Student;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();

        return response()->json(['data' => $usuarios], 200);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'role' => $request->get('role'),
        ]);
            
        $student = new Student([
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
        ]);
        
        return $user->student()->save($student);
            
    }

    public function registrarEmpresa(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $name = $request->get('name');
        $business_name = $request->get('business_name');
        $representative = $request->get('representative');
        $ruc = $request->get('ruc');

        $registro = DB::select('CALL sp_registrar_empresa(?,?,?,?,?,?)', array($email, $password, $name, $business_name, 
        $representative, $ruc));
        return redirect('visualizar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        
        return response()->json(['data' => $usuario], 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $reglas = [
            'email' => 'email|unique:users,email,' . $user->id,
            'password' => 'min:6|confirmed'
        ];

        $this->validate($request, $reglas);

        if ($request->has('email') && $user->email != $request->email) {
            $user->verified = User::USUARIO_NO_VERIFICADO;
            $user->verification_token = User::generarVerificationToken();
            $user->email = $request->email;
        }

        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }

        if (!$user->isDirty()) {
            return response()->json(['error' => 'Se debe especificar un valor diferente para actualizar', 'code' => 422], 422);
        }

        $user->save();

        return response()->json(['data' => $user], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return response()->json(['data' => $user], 200);
    }
}
