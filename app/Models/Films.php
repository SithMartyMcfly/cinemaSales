<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Films extends Model
{
    public function funcions (){
        return $this->hasMany(Funcion::class, 'film_id');
    }

    public function seat(){
        return $this->hasMany(Seat::class);
    }
}

