<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class ServerEmailRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

            return [
                'email' => 'required|email' ,
            ];


    }
}
