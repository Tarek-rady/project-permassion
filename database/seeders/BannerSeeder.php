<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{

    public function run()
    {
         Banner::insert([

            [
               'title_ar' => 'عنوان البانر باللغه العربيه' ,
               'title_en' => 'Kampf gegen den Klimawandel' ,
                'desc_ar' => 'وصف البانر باللغه العربيه' ,
                'desc_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a gallery of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum' ,
                'img'  => 'banners/1.png',
                'status' => 'active' ,
               'created_at' => now()
            ] ,

            [
                'title_ar' => 'عنوان البانر باللغه العربيه' ,
                'title_en' => 'Kampf gegen den Klimawandel' ,
                 'desc_ar' => 'وصف البانر باللغه العربيه' ,
                 'desc_en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a gallery of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum' ,
                 'img'  => 'banners/2.png',
                 'status' => 'active' ,
                'created_at' => now()
             ] ,



         ]);
    }
}
