<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThreadRequest extends FormRequest
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
            'name' => 'required',
            'thread_from' => 'required',
            'thread_level' => 'required',
            'mobile' => 'required',
            'customer_name' => 'required',
            'thread_industry' => 'required',
        ];
    }

    public function messages() {
        return [
            'name.required' => '线索名称不能为空',
            'thread_from.required' => '请选择线索来源',
            'thread_level.required' => '请选择线索级别',
            'mobile.required' => '手机号不能为空',
           // 'mobile.regex' => '手机号码格式不正确',
            'customer_name.required' => '客户名称不能为空',
            'thread_industry.required' => '请选择客户行业',
        ];
    }
}
