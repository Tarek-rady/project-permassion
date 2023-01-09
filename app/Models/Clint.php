<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clint extends Model
{
    use HasFactory;

    protected $guarded = [];

     // get Job translation
     public function getJobAttribute()
     {
         return $this->attributes['job_' . app()->getLocale()];
     } // end getJobAttribute

      // get Desc translation
      public function getDescAttribute()
      {
          return $this->attributes['desc_' . app()->getLocale()];
      } // end getDescAttribute

}
