<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcion;
use App\Models\Seat;

class SeatController extends Controller
{
    public function choose ($id) {

        $funcion = Funcion::with('sala')->FindOrFail($id);

        $ocupados = $funcion->seat()->where('isOccupied', true)->count();

        return view('lineup.chooseSeat', compact('funcion', 'ocupados'));
    }

    public function comprar (Request $request) {
        $asientoId = $request->input('asiento_id');
        $asiento= Seat::find($asientoId);

        if(!$asiento){
            return response()->json(['success' => false, 'message' =>'Asiento no encontrado']);
        }

        $asiento->isOccupied = !$asiento->isOccupied;
        $asiento -> save();

        return response()->json([
            'success'=>true,
            'estado' => $asiento->isOccupied
        ]);
    }

}

