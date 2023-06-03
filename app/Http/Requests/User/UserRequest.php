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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',            
            'email' => 'unique:users'
        ];
    }

    public function messages(){
        return [
            'name.required' => "Vui lòng nhập tên user ",
            'email.required' => "Vui lòng nhập Email ",
            'password.required' => "Vui lòng nhập mật khẩu ",
            'email.unique'=> "Email đã tồn tại . Vui lòng thử lại "
        ];   
    }
}
