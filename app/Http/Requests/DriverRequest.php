<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriverRequest extends FormRequest
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
            'model' => 'required',
            'lience' => 'required',
            'color' => 'required',
            'state' => 'required',
            'city' => 'required',
            'start' => 'required',
            'end' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'palce' => 'required',

            'car_image' =>'required',
            'specification' => 'required',

        ];
    }

    public function messages()
    {
        return [


            'name.required' =>'الرجاء ادخال اسم السائق',
            'model.required' => 'الرجاء ادخال موديل السيارة',
            'lience.required' => 'الرجاء ادخال رخضة السيارة ',
            'state.required' => 'الرجاء اختيار المحلية',
            'city.required' => 'الرجاء اختيار المنطقة',
            'start.required' => 'الرجاء تحديد زمن البداية',
            'end.required' => 'الرجاء تحديد زمن الانتهاء',
            'color.required' => 'الرجاء ادخال لون السيارة',
            'quantity.required' => 'الرجاء تحديد عدد الركاب',
            'specification.required' => 'الرجاء ادخال السعر',
            'place.required' => 'الرجاء ادخال الاماكن التي تمر بها',
            'image.required' => 'الرجاء تحديد الصورة ',












        ];
    }
}