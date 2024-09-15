<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorediscountRequest extends FormRequest
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
            'name' => 'required|',
            'percentage' => 'required|',
            'start_date'=>'required',
            'end_date'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:8000',

        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'فیلد نام الزامی است',
//            'name.string'=>'نام باید از نوع رشته باشد',
//            'name.min'=>'حداقل کاراکتر 3 است',
//            'name.max'=>'حداکثر کاراکتر لازم20 است',
            'percentage.required'=>'وارد کردن درصد تخفیفات الزامی میباشد',
//            'percentage.min'=>'حداقل0 ٪ است ',
//            'percentage.max'=>'حداکثر در صد تخفی100 است'و
        'start_date.require'=>'الزامی است',
            'end_date.require'=>'الزامی است',
        ];
    }
}
