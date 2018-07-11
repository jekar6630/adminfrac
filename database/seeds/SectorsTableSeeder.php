<?php

use Illuminate\Database\Seeder;

class SectorsTableSeeder extends Seeder
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
            App\Sector::create([
                'name' => 'Lote '.$faker->biasedNumberBetween($min=1,$max=200),
                'description' => 'Description for apples',
                'status' => $faker->biasedNumberBetween($min=1,$max=2),
            ]);
        }
    }
}
