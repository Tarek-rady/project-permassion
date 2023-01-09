<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
                'title_de' => 'required' ,
                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'desc_de' => 'required' ,

                'link' => 'required' ,
                'category_id' => 'required' ,
                'sub_category_id' => 'required' ,
                'img' => 'required|mimes:png,jpg,jpeg' ,
            ];
        }else{
            return [
                'title_ar' => 'required' ,
                'title_en' => 'required' ,
                'title_de' => 'required' ,
                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'desc_de' => 'required' ,

                'category_id' => 'required' ,
                'sub_category_id' => 'required' ,
                'link' => 'required' ,
                'img' => 'nullable|mimes:png,jpg,jpeg' ,
            ];
        }
    }
}
