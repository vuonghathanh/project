<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCreateHotel extends FormRequest
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
            'name'=>'required',
            'address' => 'required',
            'description' => 'required',
            'email' => 'required',
            'star' => 'required',
            'phone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=> 'Ô này không được bỏ trống',
            'address.required' => 'Ô này không được bỏ trống',
            'description.required'=> 'Ô này không được bỏ trống',
            'email.required' => 'Ô này không được bỏ trống',
            'star.required' => 'Ô này không được bỏ trống',
            'phone.required' => 'Ô này không được bỏ trống',
        ];
    }
}
