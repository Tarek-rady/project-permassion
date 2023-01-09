<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

            return [
                'name' => 'required' ,
                'email' => 'required|email' ,
                'phone' => 'required' ,
                'msg' => 'required' ,

            ];

    }
}
