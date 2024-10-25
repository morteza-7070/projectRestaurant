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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'type'=>'required'
        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=>'نام را وارد نمایید',
            'price.required'=>'وارد کردن قیمت الزامی است',
            'description.required'=>'وارد کردن توضیحات درباه غذا الزامی است',
            'image.required'=>'وارد نمودن عکس الزامی است',
            'image.image'=>'عکس باید از نوعimageباشد',
            'image.mimes'=>'    نوع فایل باید با فرمت:',
            'image.max'=>'حداکثر حجم فایل ارساتلی باید کمتر از 5مگابایت باشد',
            'name.string'=>'نام باید از نوع حروف باشد',
            'price.numeric'=>'قیمت از نوع عدد باید انتخاب شود',
            'description.string'=>'توضیحات باید از نوع حروف باشد',
            'type.required'=>'نوع غذا را انتخاب نمایید'

        ];
    }
}
