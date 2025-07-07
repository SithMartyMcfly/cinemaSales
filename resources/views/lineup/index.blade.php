@extends('layouts.app')
@section('content')
    <h2 class="text text-4xl mb-5">Cartelera</h2>

    @foreach ($dias as $dia)
        {{-- itero los días que hay sesión, una vez iterados hay que pasar como parámetro
        el día al método que devuelve la vista, lo pasamos através de un ancla que recarga
        la página principal --}}
        
            <button class="bg-blue-200 ml-4 p-1 border-1 rounded-md buttonDay" data-day="{{$dia->date}}">
                <a href="{{ route('lineup.index', ['date' => $dia->date]) }}">{{ $dia->date }}</a>
            </button>
    @endforeach


    <main class="flex flex-wrap justify-items-end">
        @foreach ($films as $film)
            <section class="flex flex-row mx-10 mt-4 border-1 p-2 w-full ">
                <div>
                    
                    <img src='{{ $film->poster }}' alt="Cartel de {{ $film->name }}" class="w-100 h-140">
                    <p class="text text-2xl"><strong>Título: </strong>{{ $film->name }}</p>
                    <p class="text text-2xl"><strong>Genero: </strong>{{ $film->genero }}</p>
                </div>
                <aside class="ml-8 text-xl">
                    <div id="salayhora" class="flex flex-col">
                        @if($film->funcions->first() && $film->funcions->first()->sala)
                        <strong class="mb-6">{{$film->funcions->first()->sala->name}}</strong>
                            @else
                            <strong>Sala no asignada</strong>
                        @endif
                        <div class="flex flex-row">
                        @foreach ($film->funcions as $funcion)
                            <button class="mr-4 bg-green-300 p-1 rounded-md"><a href="{{route('lineup.chooseSeat', $funcion->id)}}">{{ $funcion->hour }}</a></button>{{-- estoy enviando la id de la funcion a chooseSeat --}}
                            @endforeach
                        </div>
                    </div>
                    <p><strong>Director: </strong><i>{{ $film->director }}</i></p>
                    <p><strong>Actores: </strong><i>{{ $film->actors }}</i></p>
                    <p><strong>Sinopsis: </strong><i>{{ $film->sinopsis }}</i></p>
                    <p><strong>Calificación: </strong><i>{{ $film->calificacion }}</i></p>
                    <a href="" class="text-blue-600 text-2xl">-> Comprar entrada <-</a>
                </aside>
            </section>
        @endforeach
    </main>
@endsection



