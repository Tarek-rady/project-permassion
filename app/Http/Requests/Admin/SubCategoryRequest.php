<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
       return [

        'name_ar' => 'required' ,
        'name_en' => 'required' ,
        'name_de' => 'required' ,
        'category_id' => 'required' ,
       ];
    }
}
