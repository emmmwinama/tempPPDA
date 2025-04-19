<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\PDE;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        PDE::factory()->create([
            'name'=>'PDA',
        ]);

//         $User = User::factory()->create([
//             'name' => 'Admin',
//             'email' => 'admin@example.com',
//             'pde_id'=>'1'
//         ]);
//        $role = Role::create(['name' => 'Admin']);
//        $User->assignRole($role);
//        $role = Role::create(['name' => 'PDEUser']);
//        $role = Role::create(['name' => 'Public Relations']);


        $this->call(RolesAndPermissionsSeeder::class);
    }
}
