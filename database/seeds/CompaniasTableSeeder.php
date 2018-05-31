<?php

use Illuminate\Database\Seeder;
use App\Compania;

class CompaniasTableSeeder extends Seeder
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
            App\Compania::create([
                'name' => $faker->name(),
                'street' => $faker->streetName(),
                'phone1' => $faker->phoneNumber(),
                'phone2' => $faker->phoneNumber(),
                'email' => $faker->email(),
                'status' => 1,
            ]);
        }
    }
}
