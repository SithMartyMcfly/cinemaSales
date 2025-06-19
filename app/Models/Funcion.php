<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }
    public function film()
    {
        return $this->belongsTo(Films::class);
    }

    public function seat()
    {
        return $this->hasMany(Seat::class);
    }


    //función que genera los asientos, lo llamaremos después de crear las sesiones
    public function generarAsientos()
    {

        $sala = $this->sala;

        if ($sala && $sala->capacity) {
            for ($i = 1; $i <= $sala->capacity; $i++) {
                Seat::create([
                    'funcion_id' => $this->id,
                    'seat_number' => $i,
                    'isOccupied' => false,
                    'film_id' => $this->film_id,
                    'sala_id' => $this->sala_id
                ]);
            }
        }
    }

    //para que se generen los asientos llamando a la función debemos pemirtir asignación masiva
}
