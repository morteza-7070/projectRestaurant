<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'name_restaurant' => 'required ',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'discount_id' => 'nullable|exists:discounts,id',
            'type' => 'nullable|string',
            'mime'=>'mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'وارد کردن نام الزامی است',
            'name_restaurant.required'=>'انتخاب نام رستوران اجباری است',
            'name_restaurant.string'=>'نام از نوع حروف باید باشد',
            'price.required'=>'وارد کردن فیمت الزامی است',
            'description.required'=>'وارد کردن توضیحات الزامی است',
            'image.required'=>'وارد کردن عکس الزامی است',
            'discount_id.required'=>'وارد کردن درصد تخفیف الزامی است',
            'type.required'=>'نوع غذا ار انتخاب نمایید'
        ];
    }
}
