<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
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



}
