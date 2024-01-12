<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class LangueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create() ;

        for ($i=0; $i < 10; $i++) {
            DB::table('langues')->insert([
                'nom_langue' => $faker->country,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
