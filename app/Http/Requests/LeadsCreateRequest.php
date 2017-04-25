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
            'baby_dob'=>'required',
            'message'=>'required'
        ];


    }


    public function messages()
    {
        return [
            'name.required' => 'Please enter your name',
            'email.required' => 'Please enter your email address',
            'baby_dob.required' => 'Please enter your baby\'s date of birth',
            'email.email' => 'Your email address is not valid',
            'message.required'  => 'Please enter your message',
        ];
    }
}
