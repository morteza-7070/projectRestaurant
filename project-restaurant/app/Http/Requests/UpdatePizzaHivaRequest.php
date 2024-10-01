<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePizzaHivaRequest extends FormRequest
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
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:8000',
        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=>'وارد کردن نام الزامی است',
            'price.required'=>'وارد کردن قیمت الزامی است',
            'description.required'=>'وارد کردن توضیحات الزامی است',
            'image.required'=>'وارد کردن عکس الزامی است',
            'image.image'=>'فرمت عکس باید از نوع عکس باشد',
            'image.mimes'=>'فرمت عکس باید jpeg، png، jpg، gif یا svg باشد',
            'image.max'=>'حجم عکس باید حداکثر 8000 کیلوبایت باشد',

        ];
    }
}
