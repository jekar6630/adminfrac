<?php

use Illuminate\Database\Seeder;

class FuncionsTableSeeder extends Seeder
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
            App\Funcion::create([
                'name' => 'Funcion '.$faker->biasedNumberBetween($min=1,$max=100),
                'description' => 'Description for funcion type',
                'status' => $faker->biasedNumberBetween($min=1,$max=2),
            ]);
        }
    }
}
