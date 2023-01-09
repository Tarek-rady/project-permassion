<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $guarded = [];

    // get Title translation
    public function getTitleAttribute()
    {
        return $this->attributes['title_' . app()->getLocale()];
    } // end getTitleAttribute


    public function order()
    {
        return $this->belongsTo(Order::class , 'order_id');
    }

    public function career_applly()
    {
        return $this->belongsTo(CareerApply::class , 'career_applly_id');
    }




}
