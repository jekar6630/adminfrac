<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CompaniasTableSeeder::class);
        //$this->call(DireccionsTableSeeder::class);
        //$this->call(DireccionTypesTableSeeder::class);
        //$this->call(LotesTableSeeder::class);
        //$this->call(ManzanasTableSeeder::class);
        //$this->call(SectorsTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        $this->call(FuncionsTableSeeder::class);
    }
}
