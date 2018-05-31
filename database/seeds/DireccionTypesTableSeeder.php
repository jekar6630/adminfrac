<?php

use Illuminate\Database\Seeder;

class DireccionTypesTableSeeder extends Seeder
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
            App\DireccionType::create([
                'name' => $faker->name(),
                'description' => 'Description for direeccion type',
                'status' => $faker->biasedNumberBetween($min=1,$max=2),
            ]);
        }
    }
}
