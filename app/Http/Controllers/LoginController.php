<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        
        if(Auth::Attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            //$user = User::where('email', $request->email)->first();
            $user = Auth::user();
            if($user->esAlumno())
            {
                //echo $user->student->name;
                //echo $user->student->surname;
                //exit;
                return redirect()->route('visualizar');
            }
            elseif ($user->esEmpresa())
            {
                return redirect()->route('postulantes');
            }else {

                return redirect()->route('admin_dashboard');
            }
        }

        return redirect()->back();
    }
}
