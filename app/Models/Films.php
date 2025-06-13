<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Films extends Model
{
    public function sesion (){
        return $this->hasMany(Funcion::class);
    }
}
