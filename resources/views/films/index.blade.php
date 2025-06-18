@extends('layouts.app')

@section('content')

<h2 class="text-center text text-3xl text-bolder mt-12 mb-6 underline">Lista de Películas</h2>
<ul class="m-4">
    @foreach ($films as $film)
    <div class="flex flex-row justify-between">
        <li class="flex flex-row justify-between mb-2">
            <a href="{{route('films.show', $film)}}"><strong>TITULO</strong> {{$film->name}}</a>
        </li> 
        <div class="flex flex-row mb-1">
            <a href="{{route('films.edit', $film)}}" class="ml-6 bg-blue-200 p-1 rounded-md hover:bg-blue-400">Editar Película</a>
            <form action="{{route('films.destroy', $film)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg bg-red-400 p-1 rounded-md ml-4 cursor-pointer hover:bg-red-600">Eliminar Película</button>    
            </form>
        </div>    
    </div>
        <div class="w-full h-0.5 bg-black mb-1.5"></div>   
    
    @endforeach
</ul>

<x-indexButtons>
    <x-slot name="ruta">films</x-slot>
    <x-slot name="nombreBoton">Crear Película</x-slot>
</x-indexButtons>

    
@endsection