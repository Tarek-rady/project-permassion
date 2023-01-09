<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
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
                'category_id' => 'required' ,

                'location' => 'required' ,

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

                'location' => 'nullable' ,

            ];
        }
    }
}
