<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('modules.sign-up');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $data_form_user = $request->all();
        $check_data_user = $this->create($data_form_user);

        return redirect()->intended('sign-in')->with('success', 'Registro realizado correctamente');
    }

    public function create(array $data_form_user){
        return User::create([
            'name' => $data_form_user['name'],
            'email' => $data_form_user['email'],
            'password' => Hash::make($data_form_user['password'])
        ]);
    }
}
