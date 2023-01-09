<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

     // get Title translation
     public function getTitleAttribute()
     {
         return $this->attributes['title_' . app()->getLocale()];
     } // end getTitleAttribute

      // get Desc translation
      public function getDescAttribute()
      {
          return $this->attributes['desc_' . app()->getLocale()];
      } // end getDescAttribute

      public function category()
      {
          return $this->belongsTo(Category::class , 'category_id')->where('type' , 'service');
      }

      public function subcategory()
      {
          return $this->belongsTo(SubCategory::class , 'sub_category_id')->where('type' , 'service');
      }

      public function images()
      {
        return $this->hasMany(UploadImage::class , 'service_id');
      }


}
