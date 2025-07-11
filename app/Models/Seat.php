<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    public function films (){
        return $this->belongsTo(Films::class);
    } 
    public function funcion (){
        return $this->belongsTo(Funcion::class);
    } 
    public function sala (){
        return $this->belongsTo(Sala::class);
    } 

    
    protected $fillable = [
        'funcion_id',
        'film_id',
        'sala_id',
        'seat_number',
        'isOccupied',
    ];

}
