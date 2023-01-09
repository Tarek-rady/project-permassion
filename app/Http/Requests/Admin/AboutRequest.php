<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        if($this->method() == 'POST'){

            return [

                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'desc_de' => 'required' ,
                'img' => 'required|mimes:png,jpg,jpeg' ,
            ];
        }else{
            return [

                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'desc_de' => 'required' ,
                'img' => 'nullable|mimes:png,jpg,jpeg' ,
            ];
        }
    }
}
