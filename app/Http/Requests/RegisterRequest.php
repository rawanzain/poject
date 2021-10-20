<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return [
            'name' => 'required' ,
            'email' => 'required' ,
            'password' => 'required' ,
            'type' => 'required' ,

        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'الرجاء ادخال الاسم ',
            'email.required' => 'الرجاء ادخال الايميل ',
            'password.required' => 'الرجاء ادخال كلمة السر ',
            'type.required' => 'الرجاء تحدبد النوع سائق - طالب',
        ];
    }
}












