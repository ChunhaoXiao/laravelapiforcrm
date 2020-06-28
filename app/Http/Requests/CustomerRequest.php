<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'source_id' => 'required',
            'industry_id' => 'required',
            'customer_level' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '客户名称不能为空',
            'source.required' => '请选择客户来源',
            'industry.required' => '请选择行业',
            'customer_level.required' => '请选择客户级别'
        ];
    }
}
