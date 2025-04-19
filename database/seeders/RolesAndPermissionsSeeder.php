<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Misc
        $miscPermission = Permission::create(['name' => 'N/A']);

//        // USER MODEL
//        $userPermission1 = Permission::create(['name' => 'create: user']);
//        $userPermission2 = Permission::create(['name' => 'read: user']);
//        $userPermission3 = Permission::create(['name' => 'update: user']);
//        $userPermission4 = Permission::create(['name' => 'delete: user']);
//
//        // ROLE MODEL
//        $rolePermission1 = Permission::create(['name' => 'create: role']);
//        $rolePermission2 = Permission::create(['name' => 'read: role']);
//        $rolePermission3 = Permission::create(['name' => 'update: role']);
//        $rolePermission4 = Permission::create(['name' => 'delete: role']);
//
//        // PERMISSION MODEL
//        $permission1 = Permission::create(['name' => 'create: permission']);
//        $permission2 = Permission::create(['name' => 'read: permission']);
//        $permission3 = Permission::create(['name' => 'update: permission']);
//        $permission4 = Permission::create(['name' => 'delete: permission']);
//
//        // ADMINS
//        $adminPermission1 = Permission::create(['name' => 'read: admin']);
//        $adminPermission2 = Permission::create(['name' => 'update: admin']);

        // CREATE ROLES
//        $userRole = Role::create(['name' => 'user'])->syncPermissions([
//            $miscPermission,
//        ]);
//
        $adminRole = Role::create(['name' => 'admin']);

        $PDERole = Role::create(['name' => 'PDE']);
        $PRRole = Role::create(['name' => 'Public Relations']);

        // CREATE ADMINS & USERS

        User::create([
            'name' => 'admin',
            'is_admin' => 1,
            'email' => 'admin@ppda.mw',
            'email_verified_at' => now(),
            'password' => Hash::make('y?3!Pj8QzoLd'),
            'remember_token' => Str::random(10),
        ])->assignRole($adminRole);

//        User::create([
//            'name' => 'moderator',
//            'is_admin' => 1,
//            'email' => 'moderator@admin.com',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password'),
//            'remember_token' => Str::random(10),
//        ])->assignRole($moderatorRole);
//
//        User::create([
//            'name' => 'developer',
//            'is_admin' => 1,
//            'email' => 'developer@admin.com',
//            'email_verified_at' => now(),
//            'password' => Hash::make('password'),
//            'remember_token' => Str::random(10),
//        ])->assignRole($developerRole);
//
//        for ($i=1; $i < 50; $i++) {
//            User::create([
//                'name' => 'Test '.$i,
//                'is_admin' => 0,
//                'email' => 'test'.$i.'@test.com',
//                'email_verified_at' => now(),
//                'password' => Hash::make('password'), // password
//                'remember_token' => Str::random(10),
//            ])->assignRole($userRole);
//        }
    }
}
