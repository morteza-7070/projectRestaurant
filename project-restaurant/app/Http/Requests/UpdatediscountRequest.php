<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatediscountRequest extends FormRequest
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
            'percentage' => 'required|min:0|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ];
    }
    public function messages(): array
    {
        return[
            'name.required' => 'وارد کردن نام الزامی است',
            'percentage.required' => 'وارد کردن درضد تخفیف الزامی میباشد',
            'percentage.numeric' => 'درصد تخفیف باید از نوع عدد باشد',
            'percentage.min' => 'حداقل درصد تخفیف 0 است',
            'percentage.max' => 'حداکثر درصد 100 است',
            'image.required' => 'وارد کردن عکس الزامی است',
            'image.image' => 'عکس از نوعimageباید باشد',
            'image.mimes' => 'نوع فایل باید از فرمتهای مورد نظر باشد: jpeg, png, jpg.',
            'start_date.required' => 'وارد کردن تاریخ شروع الزامی است',
            'start_date.date' => 'شروع تخفیفات باید از نوع تاریخ باشد',
            'end_date.required' => 'وارد کردن تاریخ الزامی است',
            'end_date.date' => 'اتمام تخفیفات باید از نوع تاریخ باشد',
            'end_date.after' => 'تاریخ باید بعد از تاریخ شروع انتخاب شود ',
        ];
    }
}
