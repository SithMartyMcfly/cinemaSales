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
    <div class="w-fit mx-auto space-y-2">
        <?php
        
        $columnas = 10;
        $filas = ceil($asientosTotales / $columnas); 
       /*  var_dump($filas);
        die();     */        
        ?>
        @for ($fila = 0; $fila < $filas; $fila++)
        <div class ="flex gap-2 justify-center">
            @for($col = 0; $col < $columnas; $col++)
            <?php
            $asiento = $fila * $columnas + $col + 1;
            ?>
            @if ($asiento <= $asientosTotales)
                <img src="{{asset('imagenes/asiento.svg')}}" alt="asiento {{$asiento}}" class="w-10 h-10 p-1 rounded-sm">  
            @else
            @endif
            @endfor
        </div>
        @endfor
    </div>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const butacas = document.querySelectorAll('img'); //seleccionamos los elementos

        butacas.forEach(function (butaca) {
            butaca.addEventListener('click', function(){
                butaca.classList.toggle('bg-green-300'); //le asignamos evento click y un toggle para que vuelvan a su estado y asignen estado
            });           
        });
    });
</script>
