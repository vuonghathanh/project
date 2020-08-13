<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCreateRoom extends FormRequest
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
            'room_number' => 'required',
            'floor' => 'required',
            'room_type' => 'required',
            'hotel' => 'required',
            'price' => 'required',
            'number_people' => 'required',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'room_number.required'=> 'Ô này không được bỏ trống',
            'floor.required' => 'Ô này không được bỏ trống',
            'room_type.required'=> 'Ô này không được bỏ trống',
            'hotel.required' => 'Ô này không được bỏ trống',
            'price.required' => 'Ô này không được bỏ trống',
            'number_people.required' => 'Ô này không được bỏ trống',
            'description.required' => 'Ô này không được bỏ trống'
        ];
    }

//    public function withValidator($validator)
//    {
//        $validator->after(function ($validator){
//            if($this->get('hotel' == 0)){
//                $validator->errors()->add('hotel', 'Vui lòng chọn khách sạn!');
//            }
//            if($this->get('room_type' == 0)){
//                $validator->errors()->add('room_type','Vui lòng nhập loại phòng!');
//            }
//        });
//    }

}
