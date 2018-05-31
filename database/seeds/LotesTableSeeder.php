<?php

use Illuminate\Database\Seeder;

class LotesTableSeeder extends Seeder
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
            App\Lote::create([
                'name' => 'Lote '.$faker->biasedNumberBetween($min=1,$max=100),
                'description' => 'Description for lote type',
                'status' => $faker->biasedNumberBetween($min=1,$max=2),
            ]);
        }
    }
}
