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
        $film->name = 'Acorralado'; 
        $film->director = $faker->name(); 
        $film->actors = implode(', ', [$faker->name(), $faker->name(), $faker->name()]); 
        $film->genero = $faker->word(); 
        $film->sinopsis = $faker->sentence();
        $film->duracion = 97;
        $film->calificacion = '+18';
        $film->poster = '/storage/films/Acorralado.jpg';
        $film->save();
        $film = new Films();
        $film->name = 'Gladiator'; 
        $film->director = $faker->name(); 
        $film->actors = implode(', ', [$faker->name(), $faker->name(), $faker->name()]); 
        $film->genero = $faker->word(); 
        $film->sinopsis = $faker->sentence();
        $film->duracion = 155;
        $film->calificacion = '+16';
        $film->poster = '/storage/films/Gladiator.jpg';
        $film->save();
        $film = new Films();
        $film->name = 'Matrix'; 
        $film->director = $faker->name(); 
        $film->actors = implode(', ', [$faker->name(), $faker->name(), $faker->name()]); 
        $film->genero = $faker->word(); 
        $film->sinopsis = $faker->sentence();
        $film->duracion = 136;
        $film->calificacion = '+12';
        $film->poster = '/storage/films/Matrix.jpg';
        $film->save();


    }
}
