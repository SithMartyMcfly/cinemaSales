@extends('layouts.app')
@section('content')
    <h2 class="text text-4xl mb-5">Cartelera</h2>

    @foreach ($dias as $dia)
        {{-- itero los días que hay sesión, una vez iterados hay que pasar como parámetro
        el día al método que devuelve la vista, lo pasamos através de un ancla que recarga
        la página principal --}}
        <a href="{{ route('lineup.index', ['date' => $dia->date]) }}">
            <button class="bg-blue-200 ml-4 p-1 border-1 rounded-md">{{ $dia->date }}</button>
        </a>
    @endforeach


    <main class="flex flex-wrap justify-items-end">
        @foreach ($films as $film)
            <section class="flex flex-row mx-10 mt-4 border-1 p-2 w-full ">
                <div>
                    <img src="{{ $film['image'] }}" alt="{{ $film['title'] }}" class="w-100 h-140">
                    <p class="text text-2xl">{{ $film->genero }}</p>
                    <p class="text text-2xl"><strong>Título:</strong> {{ $film->name }}</p>
                </div>
                <aside class="ml-8 text-xl">
                    <div id="salayhora" class="flex flex-row">
                        @if($film->funcions->first() && $film->funcions->first()->sala)
                        <strong>{{$film->funcions->first()->sala->name}}</strong>
                            @else
                            <strong>Sala no asignada</strong>
                        @endif
                        @foreach ($film->funcions as $funcion)
                            <p class="flex-col ml-2">{{ $funcion->hour }}</p>
                        @endforeach
                    </div>
                    <p><strong>Director: </strong><i>{{ $film->director }}</i></p>
                    <p><strong>Actores: </strong><i>{{ $film->actors }}</i></p>
                    <p><strong>Sinopsis: </strong><i>{{ $film->sinopsis }}</i></p>
                    <a href="" class="text-blue-600 text-2xl">-> Comprar entrada <-</a>
                </aside>
            </section>
        @endforeach
    </main>
@endsection
