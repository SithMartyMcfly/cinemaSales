@extends('layouts.app')

@section('content')
    <legend class="text-center text text-3xl text-bolder mt-12 mb-6 underline">
    Formulario de registro
    </legend>
    <div >
    <form action="{{route('user.store')}}" method="POST" class="flex-col text-start ml-100 mr-100 text-xl">
        <div class="flex flex-col">
            @csrf {{-- token para impedir inyecciones de código --}}
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
                <label for="name">Apellidos:</label>
                <input type="text" name="surename" id="surename" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
                <label for="name">E-mail:</label>
                <input type="email" name="email" id="email" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
                <label for="name">Fecha Nacimiento:</label>
                <input type="date" name="bornDate" id="bornDate" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
                <label for="name">Password:</label>
                <input type="password" name="password" id="password" class="border-1 border-solid rounded-lg bg-blue-100 px-2 py-0.5">
                <button type="submit" class="bg-blue-300 text-black rounded-md p-1 mt-4">Enviar</button>
            </div>
        </form>
        <x-backButton>
            <x-slot name="ruta">
                user
            </x-slot>
        </x-backButton>
    </div>
@endsection
