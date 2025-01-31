<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuestRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:50',
            'phone' => 'required|min:6|max:11',
            'massages' => 'required|string|min:10|max:500',
        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=>'وارد کردن نام الزامی میباشد',
            'name.string'=>'نام باید دارای حروف باشد',
            'name.min'=>'حداقل کاراکتر وارد شده باید 3 باشد',
            'name.max'=>'حداکثر کاراکتر وارد شده50 میباشد',
            'phone.required'=>'وارد کردن شماره تماس الزامی است',
            'phone.min'=>'حداقل 6 شماره باشد وارد شود',
            'phone.max'=>'حداکثر کاراکتر وارد شده11 است',
            'massages.required'=>'وارد کردن ویغام الزامی است',
            'massages.string'=>'نوع پیغام باید از نوع رشته باشد',
            'massages.min'=>'حداقل کاراکتر وارد شده10 است',
            'massages.max'=>'حداکثر کاراکتر وارد شده 500 است',
        ];
    }
}
