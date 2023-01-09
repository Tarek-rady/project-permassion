<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'facebook' => 'https://www.google.com/' ,
            'instagram'=> 'https://www.google.com/' ,
            'youtube'=> 'https://www.google.com/' ,
            'twiiter'=> 'https://www.google.com/' ,
            'phone'=> '160 91900394' ,
            'wattsapp'=> '160 91900394' ,
            'email'=> "email@yahoo.com" ,
            'gmail'=> 'gmail@yahoo.com' ,
            'start_date'=> 'MONDAY ' ,
            'end_date'=> 'FRIDAY' ,
            'start_time'=> '9:00 AM' ,
            'end_time'=> '6:00 PM' ,
            'location'=> '9 ABDULLAH AL-HAMZANI ST., AL-MALAZ, RIYADH, RIYAD 12836' ,
            'type' => 'setting' ,
        ]);
    }
}
