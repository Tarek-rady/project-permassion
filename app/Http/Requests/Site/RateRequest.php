<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class RateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {


            return [
                'name' => 'required' ,
                'rate' => 'required' ,
                'email' => 'required' ,
                'phone' => 'required' ,
                'msg' => 'required' ,
                'product_id'  => 'required' ,
            ];

    }
}
