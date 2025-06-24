<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$funcion->sala->name}}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <?php $asientosTotales = $funcion->sala->capacity; ?>
    <p>capacidad {{ $funcion->sala->capacity }}</p>
    <p>{{ $funcion->sala->name }}</p>

    <p class="ml-100">Película: {{ $funcion->film->name }}</p>
    <p>Asientos ocupados: {{ $ocupados }}</p>
    <p>Asientos libres: {{ $funcion->sala->capacity - $ocupados }}</p>
    <div class="grid grid-cols-10 gap-2 w-200 mx-auto">
        @for ($i = 1; $i < $asientosTotales; $i++)
            <img src="{{asset('imagenes/asiento.svg')}}" alt="asiento" class="w-5 h-5">
            @if ($i%5 == 0)
                
            @endif
        @endfor
    </div>
</body>

</html>
