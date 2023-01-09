<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ClintRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
 if($this->method() == 'POST'){

            return [
                'job_ar' => 'required' ,
                'job_en' => 'required' ,
               'job_de' => 'required' ,
                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'desc_de' => 'required' ,
                'name' => 'required' ,
                'img' => 'required|mimes:png,jpg,jpeg' ,
            ];
        }else{
            return [
                'job_ar' => 'required' ,
                'job_en' => 'required' ,
               'job_de' => 'required' ,
                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'desc_de' => 'required' ,
                'name' => 'required' ,

                'img' => 'nullable|mimes:png,jpg,jpeg' ,
            ];
        }
    }
}
