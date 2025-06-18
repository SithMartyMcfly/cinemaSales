<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FilmAffinityController extends Controller
{
    public function search (Request $request){
        $query = $request->input('query');

        $response = Http::get('http://127.0.0.1:22049/api/search', ['query'=>$query]);

        $films = $response->json();
        return view ('films', compact('films'));
    }
}
