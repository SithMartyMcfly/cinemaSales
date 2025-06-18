@extends('layouts.app')

@section('content')
<h2 class="text-center text text-3xl text-bolder mt-12 mb-6 underline">Lista de Sesiones</h2>
    <ul class="m-4">
        @php //hacemos un false flag para ir marcando cuando termina cada sala
            $sala1 = 0;
            $sala2 = 0;
            $sala3 = 0;
        @endphp
        @foreach ($sesions as $sesion)
        @if ($sesion->sala_id == 1)
        @if ($sala1 == 0)
        <button class="ml-6 bg-blue-200 p-1 rounded-md hover:bg-blue-400" id="btn1">Sala 1</button>
            @php
                $sala1=1
                /* mostrar aquí botones */
            @endphp
        @endif
            <div class="sala1 flex flex-row justify-between">
                <a href="{{route('sessions.show', $sesion)}}"><li class="flex flex-row justify-between mb-2">{{$sesion->hour}}, {{$sesion->date}}, {{$sesion->film->name}}</li></a>{{-- conectamos con la sesión, y consultamos la tabla y el campo --}} 
            <div class="flex flex-row mb-2">
                <p>SALA: {{$sesion->sala_id}}</p>
                <a href="{{route('sessions.edit', $sesion->id)}}" class="ml-6 bg-blue-200 p-1 rounded-md hover:bg-blue-400"><button >Editar Sesión</button></a>
                <form action="{{route('sessions.destroy', $sesion->id)}}" method="POST" class="ml-4" >@csrf @method('DELETE') <button type="submit" class="bg bg-red-400 p-1 rounded-md cursor-pointer hover:bg-red-600">Borrar Sesión</button></form>{{-- pasamos el id de la sesión que necesitamos borrar --}}
            </div> 
            </div>
            
        @endif
        @if ($sesion->sala_id == 2)
            @if ($sala2 === 0){{-- al iniciar la sala es cero en el array y a partir de segunda iteración no pintamos línea --}}
            <div class="w-full h-0.5 bg-black mb-1.5"></div>
            <button class="ml-6 bg-blue-200 p-1 rounded-md hover:bg-blue-400" id="btn2">Sala 2</button>
            @php 
            $sala2 = 1;
            @endphp
        @endif
        
        <div class="sala2 flex flex-row justify-between">
            <a href="{{route('sessions.show', $sesion)}}"><li class="flex flex-row justify-between mb-2">{{$sesion->hour}}, {{$sesion->date}}, {{$sesion->film->name}}</li></a>{{-- conectamos con la sesión, y consultamos la tabla y el campo --}}
            <div class="flex flex-row mb-2">
                <p>SALA: {{$sesion->sala_id}}</p>
                <a href="{{route('sessions.edit', $sesion->id)}}" class="ml-6 bg-blue-200 p-1 rounded-md hover:bg-blue-400"><button >Editar Sesión</button></a>
                <form action="{{route('sessions.destroy', $sesion->id)}}" method="POST" class="ml-4" >@csrf @method('DELETE') <button type="submit" class="bg bg-red-400 p-1 rounded-md cursor-pointer hover:bg-red-600">Borrar Sesión</button></form>{{-- pasamos el id de la sesión que necesitamos borrar --}}
            </div> 
        </div>
        @endif
        @if ($sesion->sala_id == 3)
        @if ($sala3 == 0)
        <div class="w-full h-0.5 bg-black mb-1.5"></div>
        <button class="ml-6 bg-blue-200 p-1 rounded-md hover:bg-blue-400" id="btn3">Sala 3</button>
            @php 
            $sala3 = 1;
            @endphp

            @endif
            <div class="sala3 flex flex-row justify-between" >
                <a href="{{route('sessions.show', $sesion)}}"><li class="flex flex-row justify-between mb-2">{{$sesion->hour}}, {{$sesion->date}}, {{$sesion->film->name}}</li></a>{{-- conectamos con la sesión, y consultamos la tabla y el campo --}}
                <div class="flex flex-row mb-2">
                    <p>SALA: {{$sesion->sala_id}}</p>
                    <a href="{{route('sessions.edit', $sesion->id)}}" class="ml-6 bg-blue-200 p-1 rounded-md hover:bg-blue-400"><button >Editar Sesión</button></a>
                    <form action="{{route('sessions.destroy', $sesion->id)}}" method="POST" class="ml-4" >@csrf @method('DELETE') <button type="submit" class="bg bg-red-400 p-1 rounded-md cursor-pointer hover:bg-red-600">Borrar Sesión</button></form>{{-- pasamos el id de la sesión que necesitamos borrar --}}
                </div> 
            </div>
        
        @endif
        <div class="flex flex-row justify-between">
        
        </div>
        @endforeach
        <div class="w-full h-0.5 bg-black mb-1.5"></div>
    </ul>
    <x-index-buttons>
        <x-slot name="ruta">
            sessions
        </x-slot>
        <x-slot name="nombreBoton">
            Crear Sesión
        </x-slot>
    </x-index-buttons>
    @endsection

    
    
    <script>
        window.onload =  function() {
            document.getElementById('btn1').addEventListener('click', function () {
            document.querySelectorAll('.sala1').forEach(div=>div.classList.toggle('hidden'));
        });

        document.getElementById('btn2').addEventListener('click', function () {
            document.querySelectorAll('.sala2').forEach(div=>div.classList.toggle('hidden'));
        });
        
        document.getElementById('btn3').addEventListener('click', function () {
            document.querySelectorAll('.sala3').forEach(div=>div.classList.toggle('hidden'));
        });
    }
</script>
