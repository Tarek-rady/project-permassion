<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

     // get Name translation
     public function getNameAttribute()
     {
         return $this->attributes['name_' . app()->getLocale()];
     } // end getNameAttribute

     public function subCategories()
     {
         return $this->hasMany(SubCategory::class , 'category_id')->where('type' , 'service');
     }

     public function subCategoryProducts()
     {
         return $this->hasMany(SubCategory::class , 'category_id')->where('type' , 'product');
     }

}
