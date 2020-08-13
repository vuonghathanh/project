<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCreateBlog extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'detail'=>'required',
            'author' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=> 'Ô này không được bỏ trống',
            'description.required' => 'Ô này không được bỏ trống',
            'detail.required'=> 'Ô này không được bỏ trống',
            'author.required' => 'Ô này không được bỏ trống',
        ];
    }
}
