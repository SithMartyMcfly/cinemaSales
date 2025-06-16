<?php

namespace Database\Seeders;

use App\Models\Sala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seat;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $salas = Sala::all();

        foreach($salas as $sala){
            for($i=1; $i<=$sala->capacity; $i++){
                $seat = new Seat();
                $seat->seat_number=$i;
                $seat->sala_id = $sala->id;
                $seat->seat_number = $i;
                $seat->save();
            }
        }
    }
}
