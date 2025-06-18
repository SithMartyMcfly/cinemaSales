<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Antonio';
        $user->surename = 'Gutiérrez';
        $user->email = 'antogutilebron@gmail.com';
        $user->password = '123456789';
        $user->bornDate = '1985-11-11';
        $user->save();
    }
}
