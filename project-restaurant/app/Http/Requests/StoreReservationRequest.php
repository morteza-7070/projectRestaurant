<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
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
            'name' => 'string|max:255',
            'phone' => 'string|max:12',
            'email' => 'string|email|max:255',
            'date' => 'date',
            'number' => '',
        ];
    }
//    public function messages(): array
//    {
//        return [
//            'name.required'=>'',
//            'name.string'=>'',
//            'name.max'=>'',
//            'phone.required'=>'',
//            'phone.string'=>'',
//            'phone.max'=>'',
//            'email.required'=>'',
//            'email.string'=>'',
//            'email.max'=>'',
//            'date.required'=>'',
//            'date.date'=>'',
//            'number.required'=>'',
//
//
//        ];
//    }
}
