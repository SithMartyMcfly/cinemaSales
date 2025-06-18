
@extends('layouts.app')
@section('content')

<h2 class="text text-4xl mb-5">Arrancando Api</h2>
<ol class="flex flex-row">

    @foreach ($films as $film)
    <div class="ml-5 border-2 p-2">
        <img src="{{$film['image']}}" alt="{{$film['title']}}" width="150" class="w-1/3">
        <li>{{$film->name}}</li>
        <div>
            <p>{{$film->director}}</p>

        </div>
        <a href="" class="text-blue-600 text-2xl">-> Comprar entrada <-</a>
    </div>
        
    @endforeach
</ol>
<h2>Api arrancada</h2>
@endsection