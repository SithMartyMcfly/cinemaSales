<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    public function users(){
        return $this->hasMany(User::class);
    }
    public function sala(){
        return $this->belongsTo(Sala::class);
    }
    public function film(){
        return $this->belongsTo(Films::class);
    }
    
    //
}
