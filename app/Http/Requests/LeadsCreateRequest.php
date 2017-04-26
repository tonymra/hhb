<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadsCreateRequest extends FormRequest
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
            'email'=>'required|email',
            'babydob'=>'required',
            'message'=>'required',
            'phone'=>'required|numeric'
        ];


    }


    public function messages()
    {
        return [
            'name.required' => 'Please enter your name',
            'email.required' => 'Please enter your email address',
            'babydob.required' => 'Please enter your baby\'s date of birth',
            'email.email' => 'Your email address is not valid',
            'message.required'  => 'Please enter your message',
            'phone.required' => 'Please enter your mobile phone number',
            'phone.numeric' => ' Invalid format (numbers only)',
        ];
    }
}
