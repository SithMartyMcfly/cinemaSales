<?php

namespace App\Http\Controllers;

use App\Models\Films;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    //crear película
    public function create(){

        return view('films.create');
    }

    public function store(Request $request){
        $film = new Films();

        $film->name = $request->name;
        $film->director = $request->director;
        $film->actors = $request->actors;
        $film->genero = $request->genero;
        $film->sinopsis = $request->sinopsis;
        $film->poster = $request->poster;

        $film->save();
        return redirect()->route('films.index');
    }
    //editar pelicula
    public function edit(Films $film){
        $films = Films::all(); 
        return view('films.edit', compact(['film']));
    }
    
    public function update(Request $request, Films $film){
        $film->name = $request->name;
        $film->director = $request->director;
        $film->actors = $request->actors;
        $film->genero = $request->genero;
        $film->sinopsis = $request->sinopsis;
        $film->poster = $request->poster;
        $film->update();
        return redirect()->route('films.index');
    }

    //vistas peliculas
    public function show(Films $film){
    
        return view('films.show', compact('film'));
    }
    public function index(){

        $films = Films::all();
        return view('films.index', compact('films'));
    }
    
    //borrar pelicula
    public function destroy(Films $film){
        $film->delete();
        return redirect()->route('films.index');

    }
}
