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
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'discount_id'=>'nullable|exists:discounts,id',
            'type'=>'required|string',

        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=>'وارد کردن نام الزامی است',
            'name.string'=>'نام باید از نوع حروف باشد',
            'price.required'=>'وارد کردن قیمت الزامی میباشد',
            'price.numeric'=>'قیمت باید از نوع عدد باشد',
            'description.required'=>'وارد کردن توضیحات الزامی است',
            'description.string'=>'توضیحات باید از نوع رشته و کلمات باشند',
            'image.required'=>'وارد کردن عکس الزامی میباشد',
            'image.image'=>'نوع فیلد باید از نوع عکس باشد',
            'image.mimes'=>'نوع فایل باید از نوع:  باشد jpeg, png, jpg, gif',
            'image.max'=>'حداکثر حجم فایل باید 5 مگابایت باشد',
            'discount_id.nullable'=>'لطفا یک تخفیف معتبر را انتخاب کنید یا "بدون تخفیف" را انتخاب کنید',



        ];
    }
}
