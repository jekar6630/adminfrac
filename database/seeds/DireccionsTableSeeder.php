<?php

use Illuminate\Database\Seeder;

class DireccionsTableSeeder extends Seeder
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
            App\Direccion::create([
                'code' => '000-12CMS',
                'cvesae' => '000-123MAC',
                'street' => $faker->streetAddress(),
                'schedule' => $faker->unixTime(),
                'status' => $faker->biasedNumberBetween($min=1,$max=2),
                'idType' => $faker->biasedNumberBetween($min=1,$max=20),
                'idLot' => $faker->biasedNumberBetween($min=1,$max=20),
                'idApple' => $faker->biasedNumberBetween($min=1,$max=20),
                'idSector' => $faker->biasedNumberBetween($min=1,$max=20),
            ]);
        }
    }
}
