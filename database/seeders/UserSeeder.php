<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
           'name'=>'admin',
           'email'=>'admin@ppda.mw',
           'password'=>bcrypt('P@ssw0rd'),
           'created_at'=>now(),
           'updated_at'=>now()

       ]); //
    }
}
