@extends('layouts.app')
@section('content')

<legend class="text-center text text-3xl text-bolder mt-12 mb-6 underline">Registrar Película</legend>

<form action="{{route('films.store')}}" method="POST" class="flex-col text start ml-100 mr-100 text-xl ">
    @csrf
    <div class="flex flex-col">
        <label for="">Título:</label>
        <input type="text" name="name" id="name" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
        <label for="">Director:</label>
        <input type="text" name="director" id="director" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
        <label for="">Actores:</label>
        <input type="text" name="actors" id="actors" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
        <label for="">genero:</label>
        <input type="text" name="genero" id="genero" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
        <label for="">Sinopsis:</label>
        <textarea name="sinopsis" id="" cols="8" rows="5" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5"></textarea>
        <label for="">Poster:</label>
        <input type="file" name="poster" id="name" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5"> 
        <button type="submit" class="bg-blue-300 text-black rounded-full mt-8 mb-8 ml-40 mr-40">Registrar Película</button>   
    </div>
</form>
    
@endsection