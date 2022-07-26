<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersContracts::class);
        $this->call(LocationSeeder::class);
        $this->call(BuildingSeeder::class);
        $this->call(BlockSeeder::class);
    }
}
