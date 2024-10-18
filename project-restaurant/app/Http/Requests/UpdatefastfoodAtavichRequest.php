<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatefastfoodAtavichRequest extends FormRequest
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
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=>'',
            'price.required'=>'',
            'description.required'=>'',
            'image.required'=>'',
            'image.image'=>'',
            'image.mimes'=>'',
            'image.max'=>'',
            'name.string'=>'',
            'price.numeric'=>'',
            'description.string'=>'',
            
        ];
    }
}
