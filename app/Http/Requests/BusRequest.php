<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusRequest extends FormRequest
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
            'lience' => 'required',
            'state' => 'required',
            'city' => 'required',
            'quantity' => 'required',
            'price' => 'required',

        ];
    }

    public function messages()
    {
        return [


            'name.required' =>'الرجاء ادخال اسم السائق',
            'lience.required' => 'الرجاء ادخال رخضة السيارة ',
            'state.required' => 'الرجاء اختيار المنطقة',
            'city.required' => 'الرجاء اختيار المدينة',
            'quantity.required' => 'الرجاء تحديد عدد الركاب',
            'price.required' => 'الرجاء ادخال السعر',












        ];
    }
}