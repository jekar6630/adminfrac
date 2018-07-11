<?php

use Illuminate\Database\Seeder;

class ManzanasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 100; $i++) {
            App\Manzana::create([
                'name' => 'Manzana '.$faker->biasedNumberBetween($min=1,$max=200),
                'description' => 'Description for apples',
                'status' => $faker->biasedNumberBetween($min=1,$max=2),
            ]);
        }
    }
}
