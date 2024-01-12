<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class LangueUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create() ;

        for ($i=0; $i < 10; $i++) {

            $user_langue = [
                'user_id' => $faker->numberBetween(1,10),
                'langue_id' => $faker->numberBetween(1,10),
                'created_at' => now(),
                'updated_at' => now()
            ];

            DB::table('user_langue')->insert($user_langue);
        }
    }
}
