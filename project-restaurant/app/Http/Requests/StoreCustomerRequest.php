<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'birthday'=>'required',
            'password'=>'min:8|max:20',
        ];

    }
    public function messages(): array
    {
        return [
            'name.required'=>'وارد کردن نام الزامی است',
            'email.required'=>'وارد کردن ایمیل الزامی است',
            'email.email'=>'ایمیل از نوع ایمیل باشد',
            'phone.required'=>'وارد کردن شماره تلفن الزامی است',
            'address.required'=>'وارد کردن آدرس الزامی است',
            'birthday.required'=>'انتتخاب تاریخ تولد الزامی است',
            'password.required'=>'پسورد الزامی است',
            'password.min'=>'-حداقل کاراکتر ورودی برای پسورد 8 است',
            'password.max'=>'حداکثر کاراکتر ورودی 20 است',
//            'password.confirmed'=>'پسورد وارد شده با تکرار آن پکسان نمیباشد',
        ];
    }
}
