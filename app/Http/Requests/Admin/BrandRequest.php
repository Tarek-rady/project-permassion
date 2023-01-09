<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        if($this->method() == 'POST'){

            return [

                'img' => 'required|mimes:png,jpg,jpeg' ,
            ];
        }else{
            return [

                'img' => 'nullable|mimes:png,jpg,jpeg' ,
            ];
        }
    }
}
