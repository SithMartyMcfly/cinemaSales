@extends('layouts.app')
@section('content')

<legend class="text-center text text-3xl text-bolder mt-12 mb-6 underline">Editar Sesión</legend>

<form action="{{route('sessions.update', $sesion)}}" method="POST" class="text-start ml-100 mr-100 text-xl">
    @csrf
    @method('PUT')
    <div class="flex flex-col">

        <label for="">Sala:</label>
    <select name="sala_id" id="sala_id" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
    @foreach ($salas as $sala)
        <option value="{{$sala->id}}" {{ $sala->id == old('sala_id', $sesion->sala_id) ? 'selected' : '' }}>
            {{$sala->name}}
        </option>
    @endforeach
</select>
        <br>
        <label for="">Fecha:</label>
        <input type="text" name="date" id="date" value="{{old('date', $sesion->date)}}" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
        <label for="">Hora:</label>
        <input type="text" name="hour" id="hour" value="{{old('hour', $sesion->hour)}}" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
        <label for="">Precio:</label>
        <input type="text" name="price" id="price" value="{{old('price', $sesion->price)}}" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
        <label for="">Película para la sesión</label>
<select name="film_id" id="film_id" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
    @foreach ($films as $film)
        <option value="{{$film->id}}" {{ $film->id == old('film_id', $sesion->film_id) ? 'selected' : '' }}>
            {{$film->name}}
        </option>
    @endforeach
</select>
        <button type="submit" class="bg-blue-300 rounded-md mt-4 p-1 ml-30 mr-30">Guardar Cambios</button>
    </div>
</form>
<x-backButton>
    <x-slot name="ruta">
        sessions
    </x-slot>
</x-backButton>
    
@endsection