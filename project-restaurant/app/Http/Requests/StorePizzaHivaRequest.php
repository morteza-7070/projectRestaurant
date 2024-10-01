<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePizzaHivaRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image'=>'required',
            'discount_id'=>'required'
        ];

    }
    public function messages(): array
    {
        return [
          'name.required'=>'وارد کردن نام الزامی است',
            'price.required'=>'وارد کردن فیمت الزامی است',
            'description.required'=>'وارد کردن توضیحات الزامی است',
            'image.required'=>'وارد کردن عکس الزامی است',
            'discount_id.required'=>'وارد کردن درصد تخفیف الزامی است'
        ];
    }
}
