<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=1; $i <= 10; $i++) {

            $classes = [
                'identifiant_classe' => $faker->numberBetween(1,10),
                'filiere_id' => $faker->numberBetween(1,10),
                'created_at' => now(),
                'updated_at' => now()
            ];

            DB::table('classes')->insert($classes);
        }

    }
}
