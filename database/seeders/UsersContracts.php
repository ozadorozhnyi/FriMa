<?php

namespace Database\Seeders;

use App\Models\Contract;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersContracts extends Seeder
{
    public function run()
    {
        $contracts_quantity = config('fridge.seed.contracts');
        Contract::factory()->count($contracts_quantity)->create()->each(function($contract) {
            $contract->user()->save(
                User::factory()->create([
                    'contract_id' => $contract->id,
                    'name' => $contract->client_name
                ])
            );
        });
    }
}
