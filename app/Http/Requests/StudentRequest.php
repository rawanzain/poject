<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'department' => 'required',
            'year' => 'required',
            'state' => 'required',
            'city' => 'required',
            'start' => 'required',
            'end' => 'required',
            'day' => 'required | array',

        ];
    }

    public function messages()
    {
        return [


            'name.required' =>'الرجاء ادخال اسم الطالب',
            'department.required' => 'الرجاء اختيار القسم',
            'year.required' => 'الرجاء اختيار السنة الدراسية',
            'state.required' => 'الرجاء اختيار المحلية',
            'city.required' => 'الرجاء اختيار المنطقة',
            'start.required' => 'الرجاء تحديد زمن البداية',
            'end.required' => 'الرجاء تحديد زمن الانتهاء',
            'day.required' => 'الرجاء اختيار ايام الدوام',


        ];








    }
}
