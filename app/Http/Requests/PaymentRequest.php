<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class PaymentRequest extends FormRequest
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
            'pay_number' => ['required', Rule::unique('payments')->where('user_id', $this->user()->id)],
            'contract_id' => ['required', Rule::exists('contracts', 'id')->where('user_id', $this->user()->id)],
            'customer_id' => ['required', Rule::exists('customers', 'id')->where('user_id', $this->user()->id)],
            'pay_date' => 'required|date',
            'pay_amount' => 'required|numeric|min:0',
            'pay_method' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'pay_number.required' => '回款编号不能为空',
            'pay_number.unique' => '回款编号已存在',
            'contract_id.required' => '请选择合同编号',
            'contract_id.exists' => '回款编号不存在',
            'customer_id.required' => '请选择客户',
            'customer.exists' => '客户不存在',
            'pay_date.required' => '请选择回款日期',
            'pay_amount.required' => '回款金额不能为空',
            'pay_method.required' => '请选择回款方式',
        ];
    }
}
