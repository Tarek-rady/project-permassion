<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        if($this->method() == 'POST'){
            return [
                'name' => 'required|unique:users,name' ,
                'permissions' => 'required' ,
            ];
        }else{
            return [
                'name' => 'required' ,
                'permissions' => 'required' ,
            ];
        }

    }
}
