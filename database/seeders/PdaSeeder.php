<?php

namespace Database\Seeders;

use App\Models\PDE;
use App\Policies\UserPolicy;
use Illuminate\Database\Seeder;

class PdaSeeder extends Seeder
{
    public function run()
    {
        PDE::factory()->create([
            'name'=>'PDA',
            ]);
    }
}
