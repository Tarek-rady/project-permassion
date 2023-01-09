<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

          'twiiter' , 'required' ,
          'facebook' , 'required' ,
          'youtube' , 'required' ,
          'instagram' , 'required' ,
          'phone' , 'required|numeric' ,
          'wattsapp' , 'required|numeric' ,
          'email' , 'required' ,
          'gmail' , 'required' ,
          'start_date' , 'required' ,
          'end_date' , 'required' ,
          'start_time' , 'required' ,
          'end_time' , 'required' ,
          'location' , 'required' ,

        ];
    }
}
