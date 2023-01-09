<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->method() == 'POST'){
            return [
                'name_ar' => 'required|max:255' ,
                'name_en' => 'required|max:255' ,
                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'price' => 'required|numeric' ,
                'img' => 'required|mimes:png,jpg,jpg' ,
                'category_id' => 'required'  ,
             ];
        }else{
            return [
                'name_ar' => 'required|max:255' ,
                'name_en' => 'required|max:255' ,
                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'price' => 'required|numeric' ,
                'img' => 'nullable|mimes:png,jpg,jpg' ,
                'category_id' => 'required'  ,
             ];
        }
    }
}
