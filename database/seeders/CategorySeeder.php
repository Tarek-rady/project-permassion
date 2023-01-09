<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run()
    {
        Category::insert([

            [
                'name_ar' => 'الخدمات العامة' ,
                'name_en' => 'Public Services' ,

                
                'created_at' => now() ,
            ] ,

            [
                'name_ar' => 'الخدمات الخاصه' ,
                'name_en' => 'Specia Services' ,

                
                'created_at' => now() ,
            ] ,





            [
                'name_ar' => 'الاقسام الرئيسيه' ,
                'name_en' => 'Main Departments' ,



                'created_at' => now() ,
            ] ,


            [
                'name_ar' => 'محاسب' ,
                'name_en' => 'accountant' ,


                'created_at' => now() ,
            ] ,


            [
                'name_ar' => 'مهندس' ,
                'name_en' => 'Engineer' ,


                'created_at' => now() ,
            ] ,

        ]);


    }
}
