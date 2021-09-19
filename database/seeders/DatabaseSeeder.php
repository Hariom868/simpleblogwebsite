<?php

use Illuminate\Database\Seeder;

// Import DB and Faker services
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	foreach (range(1,500) as $index) {
            DB::table('posts')->insert([
                'title' => $faker->firstname,
                'description' => $faker->lastname,
                'author' => $faker->firstname,
                'categories' => $faker->lastname
            ]);
        }
    }
}