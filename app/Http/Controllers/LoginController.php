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
        ]));

        {
            $user = User::where('email', $request->email)->first();

            if($user->esAlumno())
            {
                return redirect()->route('visualizar');
            }
            elseif ($user->esEmpresa())
            {
                return redirect()->route('postulantes');
            }

            return redirect()->route('home');
        }

        return redirect()->back();
    }
}
