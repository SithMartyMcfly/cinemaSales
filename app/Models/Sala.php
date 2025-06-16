<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    public function sesions(){
        return $this->hasMany(Funcion::class);
    }
    public function seat (){
        return $this->hasMany(Seat::class);
    }
}
