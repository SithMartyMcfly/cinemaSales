@extends('layouts.app')
@section('content')
    <h2 class="text text-4xl mb-5">Cartelera</h2>
    <main class="flex flex-wrap justify-items-end">
        @foreach ($films as $film)
            <section class="flex flex-row mx-10 mt-4 border-1 p-2 w-full ">
                <div>
                    <img src="{{ $film['image'] }}" alt="{{ $film['title'] }}" class="w-100 h-140">
                    <p class="text text-2xl">{{ $film->genero }}</p>
                    <p class="text text-2xl"><strong>Título:</strong> {{ $film->name }}</p>
                </div>
                <aside class="ml-8 text-xl">
                    <div id="dias" class="flex flex-row">
                        @foreach ($film->funcions as $funcion)
                            <p class="mr-2">{{$funcion->date}}</p>
                        @endforeach
                        <p></p>
                    </div>
                    <div id="salayhora" class="flex flex-row">

                        <strong>{{$film->funcions->first()->sala->name}}</strong>

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
