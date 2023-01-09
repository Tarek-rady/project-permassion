<?php

namespace Database\Seeders;

use App\Models\Rate;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();

        for ($i=0; $i < 100 ; $i++) {
            Rate::insert([
                'name' => $fake->name() ,
                'email' => $fake->email() ,
                'phone' => $fake->phoneNumber() ,
                'msg' => $fake->text(150) ,
                'product_id' => rand(1,10) ,
                'rate' => rand(1,5) ,
                'created_at' => now()
            ]);
        }
    }
}
