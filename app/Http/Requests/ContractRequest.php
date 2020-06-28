<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class ContractRequest extends FormRequest
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
            'number' => ['required', Rule::unique('contracts')->where('user_id', $this->user()->id)],
            'name' => 'required',
            'total_amount' => 'required|numeric|min:0',
            'pay_date' => 'required|date',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',

        ];
    }

    public function messages()
    {
        return [
            'number.required' => '合同编号不能为空',
            'number.unique' => '合同编号已存在',
            'name.required' => '合同名称不能为空',
            'total_amount.required' => '合同金额不能为空',
            'pay_date.required' => '汇款时间不能为空',
            'start_date.required' => '请选择合同开始日期',
            'end_date.required' => '请选择合同结束日期',
            'end_date.after' =>'结束日期必须大于开始日期',
        ];
    }
}
