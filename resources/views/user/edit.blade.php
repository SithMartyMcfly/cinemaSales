@extends('layouts.app')
@section('content')

<legend class="text-center text text-3xl text-bolder mt-12 mb-6 underline">Editar Usuario</legend>

    <form action={{route("user.update", $user)}} method="POST" class="flex-col text-start ml-100 mr-100 text-xl">
        @csrf
        @method('PUT')
        <div class="flex flex-col">
            <label for="" class="text text-2xl">Nombre:</label>
            <input type="text" name="name" class="border-1 border-solid rounded lg px-2 bg-blue-100" value={{ old('name', $user->name)}}>
    
            <label for="" class="text text-2xl">Apellidos:</label>
            <input type="text" name="surename" class="border-1 border-solid rounded lg px-2 bg-blue-100" value={{old('surename', $user->surename)}}>
     
            <label for="" class="text text-2xl">E-mail:</label>
            <input type="text" name="email" class="border-1 border-solid rounded lg px-2 bg-blue-100" value="{{old('email', $user->email)}}">
            <label for="" class="text text-2xl">Fecha Nacimiento:</label>
            <input type="date" name="bornDate" class="border-1 border-solid rounded lg px-2 bg-blue-100" value="{{old('bornDate', $user->bornDate)}}">
            <button type="submit" class="bg-blue-300 rounded-md mt-4 p-1">Guardar</button>
        </div>
        <x-backButton>
            <x-slot name="ruta">
                user
            </x-slot>
        </x-backButton>
    </form>
@endsection