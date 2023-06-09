<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class SesionController extends Controller
{
    public function login()
    {
        return view('session.login');
    }

    public function iniciarSesion(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('productos');
        }
        return back()->withErrors([
            'email' => 'Usuario o contraseña incorrectos.',
        ])->onlyInput('email');
    }

    public function registrarse(Request $request)
    {
          $request->validate([
            'name_register' => 'nullable|required|min:5',
            'password_register' => 'nullable|required',
            'email_register' => 'nullable|required'
        ]);
        $user = new User();

        $user->name =  $request->name_register;
        $user->email = $request->email_register;
        $user->role = 'client';
        $user->password = bcrypt($request->password_register);
        $user->save();
        $credentials = [
            'email' => $request->email_register, 
            'password' => $request->password_register
        ];

        if (Auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('productos');
        }
        return view('session.login');
    }

    public function cerrarSesion()
    {
           Session::flush();
        
        Auth::logout();

        return redirect('/');
    }
}
