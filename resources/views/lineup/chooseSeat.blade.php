<!DOCTYPE html>
<html lang="en">
{{-- como estoy recibiendo la id de la función tengo acceso al dia y la hora ademas de los campos del seat que
estan relacionados con función --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $funcion->sala->name }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <?php
    $asientosTotales = $funcion->sala->capacity;
    ?>
    {{-- se recuperan todos los asientos en un array asientos --}}
    @php
        $asientos = $funcion->seat;
    @endphp

    <p>capacidad {{ $funcion->sala->capacity }}</p>
    <p>{{ $funcion->sala->name }}</p>
    <p>dia = {{ $funcion->hour }}</p>
    <p id="contador"></p>

    <p class="ml-100">Película: {{ $funcion->film->name }}</p>
    <p>Asientos ocupados: {{ $ocupados }}</p>
    <p>Asientos libres: {{ $funcion->sala->capacity - $ocupados }}</p>
    <div class="w-fit mx-auto space-y-2">

        @foreach($asientos->chunk(10) as $filas){{-- chunk divide el array en grupos de diez y ahora hay que iterar sobre el nuevo array que genera --}} 
                    <div class="flex flex-row">
                    {{-- itero el array asientos y recupero datos --}}
                    @foreach ($filas as $asiento) 
                    <img src="{{ asset('imagenes/asiento.svg') }}" data-id="{{ $asiento->id }}"
                        alt="asiento {{ $asiento->seat_number }}" data-ocupado="{{ $asiento->isOccupied}}"
                        class="butaca w-10 h-10 p-1 rounded-sm">
                    @endforeach     
                    </div>
        @endforeach

    </div>
</body>

</html>

<script>
    // AJAX: cambio a ocupado en la base de datos
    document.addEventListener('DOMContentLoaded', function() {
        const butacas = document.querySelectorAll('.butaca');

        butacas.forEach(function(butaca) {
            butaca.addEventListener('click', function() {
                const asientoId = butaca.dataset.id;
                console.log('Petición del asiento:', asientoId);

                fetch('/asientos/comprar', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            asiento_id: asientoId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Respuesta del servidor:', data);

                        if (data.success) {
                            alert('Asiento actualizado');
                            // Puedes alternar color aquí si quieres:
                            // butaca.classList.toggle('bg-yellow-300');
                        } else {
                            alert('Asiento NO actualizado');
                        }
                    })
                    .catch(error => {
                        console.error('No se realizó AJAX:', error);
                    });
            });
        });
    });



    //cambio de color del asiento
    document.addEventListener('DOMContentLoaded', function() {
        const butacas = document.querySelectorAll('img'); //seleccionamos los elementos

        butacas.forEach(function(butaca) {
            butaca.addEventListener('click', function() {
                butaca.classList.toggle(
                'bg-yellow-300'); //le asignamos evento click y un toggle para con el click cambiar el estado
                contador++;
            });
        });
    });
</script>
