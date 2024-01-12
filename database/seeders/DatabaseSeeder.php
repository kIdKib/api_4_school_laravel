<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $faker = Faker::create() ;

        $this->call(LangueSeeder::class);
        $this->call(FiliereSeeder::class);
        $this->call(ClasseSeeder::class);

        for ($i=1; $i <= 10; $i++) {

            $users = [
                'nom' => $faker->lastname,
                'prenom' => $faker->firstname,
                'email' => $faker->email,
                'classe_id' => $faker->numberBetween(1,8),
                'filiere_id' => $faker->numberBetween(1,10),
                'mot_de_passe' => Hash::make('password')
            ];

            DB::table('users')->insert($users);
        }
        
        $this->call(LangueUserSeeder::class);

    }
}
