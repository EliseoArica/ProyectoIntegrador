<?php

namespace App\Http\Controllers\User;

use DB;
use Auth;
use App\User;
use App\Student;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

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
        $reglas = [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'name' => 'required',
            'surname' => 'required',
        ];

        $this->validate($request, $reglas);

        $user = User::create([
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'role' => $request->get('role'),
        ]);
            
        $student = new Student([
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
        ]);
        
        $user->student()->save($student);

        return view('auth.login');
            
    }

    public function registrarEmpresa(Request $request)
    {

        $reglas = [
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'name' => 'required',
            'business_name' => 'required',
            'representative' => 'required',
            'ruc' => 'required',
        ];

        $this->validate($request, $reglas); 


        $user = User::create([
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'role' => $request->get('role'),
        ]);
            
        $company = new Company([
            'name' => $request->get('name'),
            'business_name' => $request->get('business_name'),
            'representative' => $request->get('representative'),
            'ruc' => $request->get('ruc'),
        ]);
        
        $user->company()->save($company);
        
        return view('auth.login');
    }

        /*$email = $request->get('email');
        $password = Hash::make($request->get('password'));
        $name = $request->get('name');
        $business_name = $request->get('business_name');
        $representative = $request->get('representative');
        $ruc = $request->get('ruc');

        $registro = DB::select('CALL sp_registrar_empresa(?,?,?,?,?,?)', array($email, $password, $name, $business_name, 
        $representative, $ruc));
        return redirect('postulantes');*/

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


    public function mostrarAlumno()
    {
        $user = User::find(Auth::user()->id);

        $usuarios = Auth::user();
        
        $alumnos = Auth::user()->student;

        if(empty($user)){
            return redirect()->back();
        }
       return view('usuarios.alumno.editar')->with('user', $user)->with('usuarios', $usuarios)->with('alumnos', $alumnos);
    }




    public function actualizarAlumno(Request $request)
    {
        $usuario = User::find(Auth::User()->id);

        $usu = Auth::user();

        $student = Auth::user()->student;



        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().$file->getClientOriginalName();
            $file->move(\public_path().'/avatars/',$filename);

            $usu->email = $request->get('email');
            $student->name = $request->get('name');
            $student->description = $request->get('description');
            $student->image = $filename;

            $usu->student()->save($student);

            return redirect('editar_alumno');
        }
        
        return redirect()->back();

    }

    /*
    public function update(Request $request){
        $usuario = User::find(Auth::User()->id);
        if(empty($usuario)){
           return redirect()->back();
        }
        $usuario->fill($request->all());
        $usuario->save();
        return redirect(route('index'));
     }*

    /*
        $user = User::find(Auth::User()->id);
    
        $student = Auth::user()->student;
    
        $usu = Auth::user();

        $rules = [
            //'email'            =>  'email|unique:users,email,' . $user->id,
            'name'             =>  'required|alpha',
            'description'      =>  'required|alpha',
            //'image'            =>  'required|image|mimes:jpg,jpeg,png,gif'
        ];
    
    
        $validator = \Validator::make($request->only('name', 'description'), $rules);
    
        if($validator->fails())
        {
            return redirect('visualizar')
                ->withErrors($validator)
                ->withInput();
        }else{
            $user->email = $request->get('email');
            $student->name = $request->get('name');
            $student->description = $request->get('description');
            $student->image = $request->get('image');
    
            $usu->student()->save($student);
    
            return redirect('editar_alumno');
     *   }*/

    
    


    public function mostrarEmpresa()
    {
        $user = User::find(Auth::user()->id);

        $usuarios = Auth::user();
        
        $empresa = Auth::user()->company;

        if(empty($user)){
            return redirect()->back();
        }
       return view('usuarios.empresa.editar')->with('user', $user)->with('usuarios', $usuarios)->with('empresa', $empresa);
    }
    

    public function actualizarEmpresa(Request $request)
    {
        $usuario = User::find(Auth::User()->id);

        $usu = Auth::user();

        $company = Auth::user()->company;



        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time().$file->getClientOriginalName();
            $file->move(\public_path().'/logo/',$filename);

            $usu->email = $request->get('email');
            $company->name = $request->get('name');
            $company->business_name = $request->get('business_name');
            $company->representative = $request->get('representative');
            $company->ruc = $request->get('ruc');
            $company->description = $request->get('description');
            $company->logo = $filename;

            $usu->company()->save($company);

            return redirect('editar_empresa');
        }
        
        return redirect()->back();

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
