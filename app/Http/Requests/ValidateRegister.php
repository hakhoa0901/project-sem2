<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRegister extends FormRequest
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
        return
            [
                'name' => 'required',
                'userName' => 'required|min:3|max:30',
                'password' => 'required|min:8|max:20',
                'email' => 'required',
                'address' => 'required',
                'phone' => 'required'
            ];

    }

    public function messages()
    {
        return [
            'name.required'=> 'Vui lòng nhập tên',
            'userName.required'=> 'Vui lòng nhập User Name',
            'userName.required.min'=>'Độ dài ký tự min là 3',
            'userName.required.max'=>'Độ dài ký tự max là 30',
            'password.required'=>'Vui lòng nhập giá',
            'password.required.min'=>'Độ dài ký tự min là 3',
            'password.required.max'=>'Độ dài ký tự max là 30',
            'phone.required.numeric'=>'Vui lòng nhập giá bằng số',
            'email.required'=> 'Vui lòng nhập email',
            'address.required'=> 'Vui lòng nhập địa chỉ',
            'phone.required'=> 'Vui lòng nhập số điện thoại',
        ];
    }
}

