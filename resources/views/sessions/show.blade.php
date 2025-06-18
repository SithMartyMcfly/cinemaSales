@extends('layouts.app')
@section('content')


    <div class="flex flex-col justify-center items-center mt-10">
        <label for="" class="text text-2xl">Sala:</label>
        <p>{{$session->sala->name}}</p>
        <label for="" class="text text-2xl">Fecha:</label>
        <p>{{$session->date}}</p>
        <label for="" class="text text-2xl">Hora:</label>
        <p>{{$session->hour}}</p>
        <label for="" class="text text-2xl">Precio:</label>
        <p>{{$session->price}}</p>
        <label for="" class="text text-2xl">Película para la sesión:</label>
        <p>{{$session->film->name}}</p>
        <a href="{{route('sessions.edit', $session)}}" class="bg-blue-300 text-black rounded-md mt-8 mb-2 p-1">Editar sesión</a>
        
        <x-backButton>
            <x-slot name="ruta">
                sessions
            </x-slot>
        </x-backButton>
    </div>


    
@endsection