<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\user;
use Hash;

class UserController extends Controller
{
    public function create(){
        return view('modules.users.create');
    }

    public function register_user(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required|min:8'
        ]);

        $data_form_user = $request->all();
        $check_data = $this->store_database($data_form_user);
        return redirect()->intended('home')->with('success', 'Registro realizado correctamente');
    }

    public function store_database(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function edit(Request $request, $id){
	return view('modules.users.edit')->with(['user' => User::find($id)]);
    }

    public function update(Request $request, $id){
	$request->validate([
            'name' => 'required',
            'email' => 'required|email|string|max:255',
            'role' => 'required',
            'password' => 'required|min:8'
	]);

        $user = User::find($id);
        $request['password'] = Hash::make($request['password']);
        $user->name = $request['name'];
        $user->role = $request['role'];
        $user->email = $request['email'];
        $user->password = $request['password'];

        $user->update();

        return redirect()->intended('home')->with('success', 'Los datos se actualizaron correctamente');
    }

    public function destroy(Request $request, $id){
        $user = User::find($id);
        $user->delete();
        return redirect()->intended('home')->with('success', 'Usuario eliminado correctamente');
    }

    public function show($id){
        return view('modules.users.show')->with(['user_show' => User::findOrFail($id)]);
    }
}
