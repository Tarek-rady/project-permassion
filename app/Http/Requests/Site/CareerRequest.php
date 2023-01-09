<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {


            return [
                 'name' => 'required' ,
                 'date' => 'required' ,
                 'address' => 'required' ,
                 'gender'  => 'required' ,
                 'nationality_id' => 'required' ,
                 'phone' => 'required' ,
                 'email' => 'required' ,
                 'job_title' => 'required' ,
                 'years_exprince' => 'required' ,
                 'company_name' => 'required' ,
                 'work_place' => 'required' ,
                 'institution_name' => 'required' ,
                 'certificate' => 'required' ,
                 'specialization' => 'required' ,
                 'skills' => 'required' ,
                 'courses' => 'required' ,
                 'lang' => 'required' ,
                 'cv'   => 'required'
            ];

    }
}
