<?php

namespace Database\Seeders;

use App\Models\Funcion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Session;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $funcion = new Funcion();
        $funcion->date = '2025-06-20';
        $funcion->hour = '22:15:00';
        $funcion->price = 6;
        $funcion->sala_id = 1;
        $funcion->film_id = 2;
        $funcion->save();

        $funcion = new Funcion();
        $funcion->date = '2025-06-21';
        $funcion->hour = '00:15:00';
        $funcion->price = 6;
        $funcion->sala_id = 1;
        $funcion->film_id = 2;
        $funcion->save();

        $funcion = new Funcion();
        $funcion->date = '2025-06-20';
        $funcion->hour = '19:15:00';
        $funcion->price = 6;
        $funcion->sala_id = 2;
        $funcion->film_id = 3;
        $funcion->save();

        $funcion = new Funcion();
        $funcion->date = '2025-06-20';
        $funcion->hour = '22:15:00';
        $funcion->price = 6;
        $funcion->sala_id = 3;
        $funcion->film_id = 1;
        $funcion->save();
    }
}
