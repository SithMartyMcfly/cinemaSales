<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\Funcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    //crear película
    public function create()
    {
        //recojo los valores del campo enum
        $enumValores = DB::select("SHOW COLUMNS FROM FILMS LIKE 'calificacion'")[0]->Type;
        preg_match("/enum\((.*)\)$/", $enumValores, $matches);
        $calificaciones = explode(",", str_replace("'", "", $matches[1]));

        return view('films.create', compact('calificaciones'));
    }

    public function store(Request $request)
    {
        // Validar los datos, incluyendo la imagen
        $request->validate([
            'name' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'actors' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'sinopsis' => 'required|string',
            'duracion' => 'required',
            'calificacion' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
        // Guardar película en la base de datos con la lógica que usabas al inicio
        $film = new Films();
        
        $film->name = $request->name;
        $film->director = $request->director;
        $film->actors = $request->actors;
        $film->genero = $request->genero;
        $film->sinopsis = $request->sinopsis;
        $film->duracion = $request->duracion;
        $film->calificacion = $request->calificacion;
        if ($request->hasFile('poster')) {
            $path = $request->file('poster')->store('films', 'public');
            $film->poster = Storage::url($path);
            //dd(Storage::url($path));
        }

        $film->save();

        return redirect()->route('films.index')->with('success', 'Película creada correctamente');
    }



    //editar pelicula
    public function edit(Films $film)
    {
        $enumValores = DB::select("SHOW COLUMNS FROM FILMS LIKE 'calificacion'")[0]->Type;
        preg_match("/enum\((.*)\)$/", $enumValores, $matches);
        $calificaciones = explode(",", str_replace("'", "", $matches[1]));

        $films = Films::all();
        return view('films.edit', compact(['film', 'calificaciones']));
    }

    public function update(Request $request, Films $film)
    {
        $film->name = $request->name;
        $film->director = $request->director;
        $film->actors = $request->actors;
        $film->genero = $request->genero;
        $film->sinopsis = $request->sinopsis;
        $film->duracion = $request->duracion;
        $film->calificacion = $request->calificacion;
        if ($request->hasFile('poster')) {
            $path = $request->file('poster')->store('public/films');
            $film->poster = Storage::url($path);
        }


        $film->update();
        return redirect()->route('films.index');
    }

    //vistas peliculas
    public function show(Films $film)
    {

        return view('films.show', compact('film'));
    }


    public function index()
    {
        // 🔹 Obtener todas las películas desde la base de datos
        $films = Films::all();
        return view('films.index', compact('films'));
    }

    //borrar pelicula
    public function destroy(Films $film)
    {
        $film->delete();
        return redirect()->route('films.index');
    }
}
