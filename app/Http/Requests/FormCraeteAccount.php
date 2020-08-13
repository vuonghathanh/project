<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCraeteAccount extends FormRequest
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
            'username'=> 'required|min:6|max:18',
            'password'=> 'required|min:6|max:12',
            'first-name'=> 'required',
            'last-name'=>'required',
            'identity_card' => 'required|min:12|max:12',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'username.required'=> 'Ô này không được bỏ trống',
            'username.required.min'=> 'Độ dài tối thiểu là 6',
            'username.required.min.max'=> 'Độ dài tối đa là 18',
            'password.required' => 'Ô này không được bỏ trống',
            'password.required.min'=> 'Độ dài tối thiểu là 6',
            'password.required.min.max'=> 'Độ dài tối đa là 12',
            'first-name.required'=> 'Ô này không được bỏ trống',
            'last-name.required'=> 'Ô này không được bỏ trống',
            'identity_card.required' => 'Ô này không được bỏ trống',
            'identity_card.required.min' => 'Độ dài nhập vào phải là 12',
            'identity_card.required.max' => 'Độ dài nhập vào phải là 12',
            'email.required' => 'Ô này không được bỏ trống',
            'email.required.email' => 'Dữ liệu nhập vào phải theo dạng email: abc@gmail.com',
        ];
    }
}
