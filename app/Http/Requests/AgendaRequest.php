<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaRequest extends FormRequest
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
            'theme' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'theme.required' => '请选择主题',
            'start_time.required' => '请选择开始时间',
            'end_time.required' => '请选择结束时间',
        ];
    }
}
