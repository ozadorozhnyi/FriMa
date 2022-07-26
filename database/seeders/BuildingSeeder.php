<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;
use App\Models\Building;

class BuildingSeeder extends Seeder
{
    public function run()
    {
        $buildings_range = config('fridge.seed.building.range');
        Location::all()->each(function ($location) use ($buildings_range) {
            $buildings_quantity = rand($buildings_range['min'], $buildings_range['max']);
            $location->buildings()->saveMany(
                Building::factory()->count($buildings_quantity)->create([
                    'location_id' => $location->id
                ])
            );
        });
    }
}
