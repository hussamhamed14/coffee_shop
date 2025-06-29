<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // يمكنك هنا وضع منطق لتحديد ما إذا كان المستخدم الحالي مصرح له بالقيام بهذا الإجراء
        // حالياً سنجعلها true ليتمكن أي شخص من إرسال الطلب
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * 
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // نحصل على معرّف المتجر من الرابط في حالة التحديث
        $storeId = $this->route('store'); // 'store' هو اسم الباراميتر في Route::resource

        return [
            // عند التحديث، نتجاهل المتجر الحالي عند التحقق من تفرد الاسم
            'store_name' => [
                'required',
                'string',
                'max:50',
                Rule::unique('stores', 'store_name')->ignore($storeId),
            ],
            'store_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'store_address' => 'required|string|max:70',
            'store_phone' => ['required', 'string', 'max:15', 'regex:/^[0-9+\-\s]+$/'],
            'e_mail' => 'required|email|max:50',
            'owner_name' => ['required', 'string', 'max:20', 'regex:/^[\p{Arabic}A-Za-z\s]+$/u'],
            'status' => 'required|boolean',
        ];
    }

    /**
     * Get the custom validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'store_name.required' => 'اسم المتجر مطلوب.',
            'store_name.unique' => 'اسم المتجر مستخدم من قبل.',
            'store_name.max' => 'اسم المتجر لا يمكن أن يتجاوز 50 حرفًا.',

            'store_logo.image' => 'الملف المرفق يجب أن يكون صورة.',
            'store_logo.mimes' => 'امتداد الصورة يجب أن يكون jpeg, png, jpg, gif, or svg.',
            'store_logo.max' => 'حجم الصورة لا يجب أن يتجاوز 2 ميجا بايت.',

            'store_address.required' => 'عنوان المتجر مطلوب.',
            'store_address.max' => 'عنوان المتجر لا يمكن أن يتجاوز 70 حرفًا.',

            'store_phone.required' => 'رقم الهاتف مطلوب.',
            'store_phone.regex' => 'صيغة رقم الهاتف غير صحيحة.',
            'store_phone.max' => 'رقم الهاتف لا يمكن أن يتجاوز 15 رقمًا.',

            'e_mail.required' => 'البريد الإلكتروني مطلوب.',
            'e_mail.email' => 'صيغة البريد الإلكتروني غير صحيحة.',
            
            'owner_name.required' => 'اسم المالك مطلوب.',
            'owner_name.regex' => 'اسم المالك يجب أن يحتوي على أحرف فقط (عربية أو إنجليزية).',

            'status.required' => 'حالة المتجر مطلوبة.',
            'status.boolean' => 'قيمة الحالة غير صالحة.',
        ];
    }
}
