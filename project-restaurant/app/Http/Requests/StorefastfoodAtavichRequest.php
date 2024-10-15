<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorefastfoodAtavichRequest extends FormRequest
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
            'name'=>'required|string',
            'price'=>'required|numeric',
            'description'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'discount_id'=>'required|integer|exists:discounts',
        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=>'ارد کردن نام الزامی است',
            'name.string'=>'نام باید از نوع حروف باشد',
            'price.required'=>'وارد کردن قیمت الزامکی میباشد',
            'price.numeric'=>'قیمت باید از نوع عدد باشد',
            'description.required'=>'وارد کردن توضیحات الزامی است',
            'description.string'=>'وارد کردن توضیحات الزامی میباشد',
            'image.required'=>'وارد کردن عکس الزامی میباشد',
            'image.image'=>'نوع فیلد باید از نوع عکس باشد',
            'image.mimes'=>'نوع فایل باید از نوع:  باشد jpeg, png, jpg, gif',
            'image.max'=>'حداکثر حجم فایل باید 5 مگابایت باشد',
            'discount_id.required'=>'انتخاب درصد تخفیف الزامی است',
            'discount_id.integer'=>'درصد تخفیف از نوع عدد باید باشد',
            'discount_id.exists'=>'درصد تخفیف باید در جدول تخفیفات وجود داشته باشد',

        ];
    }
}
