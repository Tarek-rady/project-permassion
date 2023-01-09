<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    use HasFactory;

    protected $guarded = [];

    // get Name translation
    public function getNameAttribute()
    {
        return $this->attributes['name_' . app()->getLocale()];
    } // end getNameAttribute

    public function career_applly()
    {
        return $this->belongsTo(CareerApply::class , 'career_applly_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class , 'order_id');
    }
}
