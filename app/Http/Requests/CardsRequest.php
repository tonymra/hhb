<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardsRequest extends FormRequest
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
            'name'=>'required',
            'price'=>'required|numeric',
            'quantity'=>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter the name',
            'price.required'  => 'Please enter the price',
            'quantity.required' => 'Please specify the number of credits',
            'price.numeric'  => 'Please enter numbers only',
            'quantity.numeric' => 'Please enter numbers only'
        ];
    }
}
