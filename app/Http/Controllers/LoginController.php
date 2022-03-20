<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function signIn(){
        return view('modules.sign-in');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            request()->session()->regenerate();
            return redirect()->intended('home')->with('success', 'Inicio Sesion Correctamente');
        }
        return redirect()->route('sign-in')->with('success','Uno de los datos son incorrectos');
    }

    public function dashboard(){
        if(Auth::check()){
            $user = User::all();
            return view('modules.dashboard')->with(['users' => $user]);
        }
        return redirect()->route('sign-in')->with('message', 'No inicio sesion con un usuario registrado');
    }

    public function signout(Request $request){
        Session::flush();
        Auth::logout();
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
