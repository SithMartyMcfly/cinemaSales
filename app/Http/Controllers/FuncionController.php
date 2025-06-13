<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\Funcion;
use App\Models\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FuncionController extends Controller
{
    //crear sesión
    public function create(){
        //recuperamos del modelo todos los registros, de salas y películas
        $films = Films::all();
        $salas = Sala::all();
        return view('sessions.create', compact(['films', 'salas']));
    }

    public function store(Request $request){
        $sesion = new Funcion();
        $sesion->sala_id = $request->sala_id;
        $sesion->date = $request->date;
        $sesion->hour = $request->hour;
        $sesion->price = $request->price;
        $sesion->film_id = $request->film_id;
        $sesion->save();
        return redirect()->route('sessions.index' );
    }
    //editar sesión
    public function edit($id){
        $sesion = Funcion::find($id);

        
        $films = Films::all();
        $salas = Sala::all();
        return view('sessions.edit', compact('films', 'salas', 'sesion'));
    }
    
    public function update (Request $request, Funcion $session){
        //$sesion->id = $request->id;
        $session->sala_id = $request->sala_id;
        $session->date = $request->date;
        $session->hour = $request->hour;
        $session->price = $request->price;
        $session->film_id = $request->film_id;
       // var_dump($request);
        $session->update();
        return redirect()->route('sessions.show', compact('session'));
    }
    //vistas sesión
    public function show (Funcion $session){
//var_dump($sesion);
        return view('sessions.show', compact('session'));
    }

    public function index(){
        $sesions = Funcion::orderby('sala_id')->get();
        //$sesions = Funcion::all()->orderBy('sala_id');
        $films = Films::all();
        return view('sessions.index', compact(['sesions', 'films']));
    }
    //eliminar sesión
    public function destroy ($id){
        $sesion=Funcion::find($id);
        $sesion->delete();
        return  redirect()->route('sessions.index');
    }
}
