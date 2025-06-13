<?php

namespace Database\Seeders;

use App\Models\Sala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sala = new Sala();
        $sala->name = 'Sala 1';
        $sala->capacity = 125;
        $sala->save();
        $sala = new Sala();
        $sala->name = 'Sala 2';
        $sala->capacity = 80;
        $sala->save();
        $sala = new Sala();
        $sala->name = 'Sala 3';
        $sala->capacity = 95;
        $sala->save();
    }
}
