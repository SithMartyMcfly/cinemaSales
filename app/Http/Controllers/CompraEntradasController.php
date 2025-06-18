<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Films;

class CompraEntradasController extends Controller
{
    //vista de cartelera

    public function index(){
        $films=Films::all();
        return view('lineup.index', compact('films'));
    }

    //eleccion de sesión

    public function choose(){
        return view ('views.choose');
    }

    //confirmar compra (store)

    public function buy (){
        return 'la compra ha sido realizada';
    }
}
