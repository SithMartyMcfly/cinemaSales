@extends('layouts.app')

@section('content')

    <legend class="text-center text text-3xl text-bolder mt-12 mb-6 underline">
    Insertar una sesión
    </legend>
    <form action="{{route('sessions.store')}}" method="POST" class="flex-col text-start ml-100 mr-100 text-xl">
        <div class="flex flex-col">
                @csrf {{-- token para impedir inyecciones de código --}}
                <label for="name">Sala:</label>{{-- mandamos salas --}}
                <select name="sala_id" id="id_sala" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
                    <option value="" selected><i>Selecciona una sala</i></option>
                    @foreach ($salas as $sala)
                        <option value="{{$sala->id}}">{{$sala->id}}. {{$sala->name}}</option>
                    @endforeach
                </select>
                <label for="name">Fecha:</label>
                <input type="date" name="date" id="date" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
                <label for="name">Hora:</label>
                <input type="time" name="hour" id="hour" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
                <label for="name">Precio:</label>
                <input type="text" name="price" id="price" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
                <label for="id_film">Selecciona la Película para esta sesión</label>
                <select name="film_id" id="id_film" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
                    <option value="" selected><i>Selecciona una película</i></option>
                    @foreach ($films as $film){{-- mandamos peliculas --}}
                        <option value="{{$film->id}}">{{$film->id}}. {{$film->name}}</option>
                    @endforeach
                </select>
                <button type="submit" class="bg-blue-300 text-black rounded-full mt-8 mb-8 ml-40 mr-40">Enviar</button>
            </div>
        </form>
        <x-backButton>
            <x-slot name="ruta">
                sessions
            </x-slot>
        </x-backButton>
        
@endsection