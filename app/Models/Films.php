<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Films extends Model
{
    public function funcion (){
        return $this->hasMany(Funcion::class);
    }

    public function seat(){
        return $this->hasMany(Seat::class);
    }
}

