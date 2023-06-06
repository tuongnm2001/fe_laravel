<?php

namespace App\Http\Requests\User;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    
    public function rules(){
        return [
            'name' => 'required | string',
            'email' => 'required | string',
            'password' => 'required |confirmed ',   
            'password_confirmation' => 'required',         
            'email' => 'unique:users'
        ];
    }

    public function messages(){
        return [
            'name.required' => "Vui lòng nhập tên User ",
            'name.string' => "User không được nhập số",
            'email.required' => "Vui lòng nhập Email ",
            'email.unique'=> "Email đã tồn tại . Vui lòng thử lại ",
            'password.required' => "Vui lòng nhập mật khẩu ",
            'password.confirmed'=> 'Mật khẩu mới không khớp vui lòng thử lại',
            'password_confirmation.required'=>'Vui lòng nhập xác nhận mật khẩu'
        ];   
    }
}
