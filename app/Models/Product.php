<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    // get name translation
    public function getNameAttribute()
    {
        return $this->attributes['name_' . app()->getLocale()];
    } // end getNameAttribute



    // get Desc translation
    public function getDescAttribute()
    {
        return $this->attributes['desc_' . app()->getLocale()];
    } // end getDescAttribute


     // function has many rates
     public function rates()
     {
         return $this->hasMany(Rate::class , 'product_id');
     }

     // funvtion get avg rates
     public function avg_rates()
     {
         $product_rated = $this->rates->where('rate', '!=', null)->count();

         if ($product_rated)
             return $this->rates->sum('rate') / $product_rated;
     }


     public function category()
     {
         return $this->belongsTo(Category::class , 'category_id');
     }



     public function order()
     {
        return $this->belongsTo(Order::class , 'product_id');
     }

     public function images()
      {
        return $this->hasMany(UploadImage::class , 'product_id');
      }









}
