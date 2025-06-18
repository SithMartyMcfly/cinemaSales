<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //crear usuario
    public function create (){
        return view('user.create');
    }

    public function store(Request $request){//pasamos parámetros del objeto REQUEST

        $user = new User();//creamos objeto user y vamos asignando los valores del formulario
        $user->name = $request->name;
        $user->surename = $request->surename;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->bornDate = $request->bornDate;

        $user->save();
        return redirect()->route('user.index');
    }

    //ver usuarios
    public function index(){
        $users = User::all();//usamos meétodo all para traer todos los usuarios
        return view('user.index', compact('users'));//compact se encarga de generar el array asociativo de los objetos USER
    }

    public function show(User $user){
        //$user = User::find($user);

        return view('user.show', compact('user'));
    }

    
    //editar usuario
    public function update(Request $request, User $user){
        $user->name = $request->name;
        $user->surename = $request->surename;
        $user->email = $request->email;
        $user->bornDate = $request->bornDate;
        $user->save();
        return redirect()->route('user.index');
    }
    public function edit(User $user){

        return view('user.edit', compact('user'));
    }
    //borrar usuario
    public function destroy(User $user){
        $user -> delete();
        return redirect()->route('user.index');
    }
    
}
