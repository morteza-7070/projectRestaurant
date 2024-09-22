<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'min:3|max:20|',
            'phone' => 'min:2|max:20|',

            'address' => 'min:4|max:60|',
            //'birthday' => 'date|',
            'password' => 'min:4|max:30|',
            'email' => 'min:4|max:30|',
        ];
    }
    public function messages(): array
    {
        return[
            'name.min'=>'',
            'name.max'=>'',
            'phone.min'=>'',
            'phone.max'=>'',
            'email.email'=>'',
            'address.min'=>'',
            'address.max'=>'',
            'birthday.date'=>'',
            'password.min'=>'',
            'password.max'=>'',


        ];
    }
}
