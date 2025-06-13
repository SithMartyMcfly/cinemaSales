@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center items-center mt-10">
    <p class="text text-2xl">{{$user->surename}}, {{$user->name}}</p> {{-- debemos usar {{}}para devolver los campos --}}
    <p>E-mail: {{$user->email}}</p>
    <a href="{{route('user.edit', $user)}}" class="bg-blue-300 text-black rounded-full mt-8 mb-2 pl-10 pr-10">Editar usuario</a>
    <a href="{{route('user.index')}}" class="bg-green-300 text-black rounded-full mb-8 pl-10 pr-10 p-1"><img src="{{asset('iconos/atras.png')}}" alt="atras" width="15" height="20"></a>
</div>

@endsection
