<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{

    public function run()
    {
        $owner = User::create([
            'name' => 'owner' ,
            'email' => 'owner@yahoo.com' ,
            'email_verified_at' => now() ,
            'password' => bcrypt('password') ,
            'remember_token'=>Str::random(10),
        ]);
        $owner->attachRole('owner');

        

    }
}
