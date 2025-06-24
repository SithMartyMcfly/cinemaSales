<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcion;

class SeatController extends Controller
{
    public function choose ($id) {

        $funcion = Funcion::with('sala')->FindOrFail($id);

        $ocupados = $funcion->seat()->where('isOccupied', true)->count();



        return view('lineup.chooseSeat', compact('funcion', 'ocupados'));
    }
}

