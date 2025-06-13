<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraEntradasController extends Controller
{
    //vista de cartelera

    public function index(){
        return view('views.lineup');
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
