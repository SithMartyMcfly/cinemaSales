@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center items-center mt-10">
    <p class="text text-2xl">{{$user->surename}}, {{$user->name}}</p> {{-- debemos usar {{}}para devolver los campos --}}
    <p>E-mail: {{$user->email}}</p>
    <p>Fecha Nacimiento: {{$user->bornDate}}</p>
    <a href="{{route('user.edit', $user)}}" class="bg-blue-300 text-black rounded-md mt-8 mb-2 pl-10 pr-10">Editar usuario</a>
    <x-backButton>
        <x-slot name="ruta">
            user
        </x-slot>
    </x-backButton>
</div>

@endsection
