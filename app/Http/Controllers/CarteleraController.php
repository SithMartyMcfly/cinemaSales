<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Films;
use App\Models\Funcion;
use Illuminate\Support\Facades\Http;

class CarteleraController extends Controller
{

    //OBTENER CARTELERA

    public function dias()
    {
        $dias = Funcion::select('date')->distinct()->orderBy('date')->get();

        return $dias;
    }

    public function lineup(Request $request)
    {

        $diaSeleccionado = $request->input('date');

        //dd($request->input('dia'));


        /*  🔹 Obtener todas las películas que tienen sesiones en la fecha que pasamos por parámetros
     desde la vista por el ancla, y previamente hemos recuperado con el request */
        $films = Films::select([
            'id',
            'name',
            'director',
            'actors',
            'genero',
            'sinopsis',
            'duracion',
            'calificacion',
            'poster'
        ])

            ->with([
                'funcions' => function ($query) use ($diaSeleccionado) {
                    if ($diaSeleccionado) {
                        $query->where('date', $diaSeleccionado);
                    }
                },
                'funcions.sala:id,name'
            ])->whereHas('funcions', function ($query) use ($diaSeleccionado) {
                if ($diaSeleccionado) {
                    $query->where('date', $diaSeleccionado);
                }
            })->get();

        //usamos la función días para llevar los dias a la vista
        $dias = $this->dias();

        return view('lineup.index', compact('films', 'dias'));
    }
}
