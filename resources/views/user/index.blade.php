@extends('layouts.app')

@section('content')
<h2 class="text-center text text-3xl text-bolder mt-12 mb-6 underline">Lista de Usuarios</h2>
<ol class="m-4 text-xl">
    @foreach ($users as $user)
    <li>
        <div class="flex flex-row justify-between">
            <a href="{{route('user.show', $user->id)}}">{{$user->name}} {{$user->surename}}</a>
            <div class="flex flex-row">
                <a href="{{route('user.edit', $user)}}" class="ml-6 bg-blue-400 text-neutral-50 px-2 rounded-md my-1">Editar usuario</a>
                <form action="{{route('user.destroy', $user)}}" method="POST" class="ml-6 bg-red-400 text-neutral-50 px-2 rounded-md my-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar usuario</button>
                    </form>
            </div>
        </div>
    </li>
    @endforeach
</ol>  
@endsection