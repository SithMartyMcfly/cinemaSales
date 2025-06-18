@extends('layouts.app')
@section('content')
    <h1 class="text-6xl text-center mt-10">Menú Gestión Cine</h1>
    <div class="flex flex-col text-center text-2xl mt-10 mb-10">
        <a href="{{route('user.index')}}" class="bg-blue-600 text-white mb-5 hover:bg-blue-200 hover:text-black">Administrar usuarios</a>
        <a href="{{route('films.index')}}" class="bg-blue-600 text-white mb-5  hover:bg-blue-200 hover:text-black">Administrar Películas</a>
        <a href="{{route('sessions.index')}}" class="bg-blue-600 text-white mb-5  hover:bg-blue-200 hover:text-black">Administrar Sesiones</a>
        <a href="{{route('lineup.index')}}" class="bg-blue-600 text-white mb-5  hover:bg-blue-200 hover:text-black">Ver Cartelera</a>
    </div>
@endsection