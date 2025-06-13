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
        <a href="{{route('sessions.edit', $session)}}" class="bg-blue-300 text-black rounded-full mt-8 mb-2 pl-10 pr-10">Editar sesión</a>
        <a href="{{route('sessions.index')}}" class="bg-green-300 text-black rounded-full mb-8 pl-10 pr-10 p-1"><img src="{{asset('iconos/atras.png')}}" alt="atras" width="15" height="20"></a>
    </div>


    
@endsection