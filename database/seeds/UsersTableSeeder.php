<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            App\User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'email2' => $faker->email(),
                'password' => $faker->password(),
                'phone1' => $faker->phoneNumber(),
                'phone2' => $faker->phoneNumber(),
                'phone3' => $faker->phoneNumber(),
                'officephone' => $faker->phoneNumber(),
                'movilphone1' => $faker->phoneNumber(),
                'movilphone2' => $faker->phoneNumber(),
                'status' => $faker->biasedNumberBetween($min=1,$max=2),
                'idCompany' => $faker->biasedNumberBetween($min=1,$max=100),
                'idFunction' => $faker->biasedNumberBetween($min=1,$max=50),
            ]);
        }
    }
}
