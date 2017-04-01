<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 200;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('products')->insert([
                'name' => $faker->firstName . ' ' . $faker->lastName,
                'description' => $faker->text($maxNbChars = 200),
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);
        }
    }
}
