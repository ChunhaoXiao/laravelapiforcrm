<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessRequest extends FormRequest
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
            'customer_id' => 'required',
            'level_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '商机名称不能为空',
            'customer_id.required' => '请选择客户',
            'level_id.required' => '请选择商机等级',
        ];
    }
}
