<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:10',
            'customer_id' => 'required|exists:customers,id',
            'mobile' => 'required|regex:/^1[34578][0-9]{9}$/',
            'duties' => 'required',
            'email' => 'nullable|email',
            //'next_call_date' => 'nullable|'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '联系人名字不能为空',
            'customer_id.required' => '请选择客户名称',
            'mobile.required' => '手机号不能为空',
            'mobile.regex' => '手机号格式不正确',
            'duties' => '联系人职务不能为空',
            'email.email' => '邮箱格式不正确',
        ];
    }
}
