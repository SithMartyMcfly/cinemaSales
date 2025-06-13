<?php

namespace Database\Seeders;

use App\Models\Films;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $film = new Films();

        $film->name = 'Misión Imposible'; 
        $film->director = $faker->name(); 
        $film->actors = implode(', ', [$faker->name(), $faker->name(), $faker->name()]); 
        $film->genero = $faker->word(); 
        $film->sinopsis = $faker->name();
        $film->save();
        $film = new Films();
        $film->name = 'Roma'; 
        $film->director = $faker->name(); 
        $film->actors = implode(', ', [$faker->name(), $faker->name(), $faker->name()]); 
        $film->genero = $faker->word(); 
        $film->sinopsis = $faker->name();
        $film->save();
        $film = new Films();
        $film->name = 'Matrix'; 
        $film->director = $faker->name(); 
        $film->actors = implode(', ', [$faker->name(), $faker->name(), $faker->name()]); 
        $film->genero = $faker->word(); 
        $film->sinopsis = $faker->name();
        $film->save();


    }
}
