@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center items-center mt-10">
    <label for="" class="text text-2xl">Titulo:</label>
    <p>{{$film->name}}</p>
    <label for="" class="text text-2xl">Director:</label>
    <p>{{$film->director}}</p>
    <label for="" class="text text-2xl">Actores:</label>
    <p>{{$film->actors}}</p>
    <label for="" class="text text-2xl">Género:</label>
    <p>{{$film->genero}}</p>
    <label for="" class="text text-2xl">Sinopsis:</label>
    <p>{{$film->sinopsis}}</p>
    <label for="" class="text text-2xl">Poster:</label>
    <img src="{{$film->poster}}" alt="{{$film->name}}" width="150" height="150">
    <a href="{{route('films.edit', $film)}}" class="bg-blue-200 p-1 rounded-full mb-2">Editar Película</a>
    <a href="{{route('films.index')}}" class="bg-green-300 text-black rounded-full mb-8 pl-10 pr-10 p-1"><img src="{{asset('iconos/atras.png')}}" alt="atras" width="15" height="20"></a>
</div>

    
@endsection