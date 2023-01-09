<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        if($this->method() == 'POST'){

            return [
                'title_ar' => 'required' ,
                'title_en' => 'required' ,
                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'img' => 'required|mimes:png,jpg,jpeg' ,
            ];
        }else{
            return [
                'title_ar' => 'required' ,
                'title_en' => 'required' ,
                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,

                'img' => 'nullable|mimes:png,jpg,jpeg' ,
                'status'  => 'required'
            ];
        }
    }
}
