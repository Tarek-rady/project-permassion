<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

            return [
                'name' => 'required|max:255' ,
                'email' => 'required|email' ,
                // 'subject' => 'required' ,
                'msg' => 'required' ,

            ];

    }
}
