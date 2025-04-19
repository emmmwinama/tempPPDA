<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Public Relations',],
            ['name' => 'PDEUser',],
        ];
      Role::instert($data);
    }
}
