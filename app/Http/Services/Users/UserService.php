<?php 


namespace App\Http\Services\Users;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class UserService{

    public function getAllUser(){
        return User::all();
    }

    public function insert($request){

       try {
            $request->except('_token');
            User::create($request->all());
            $request->session()->flash('success', 'Thêm user thành công');
       } catch (\Exception $err) {
            $request->session()->flash('error', 'Thêm user thất bại thất bại');
            \Log::info($err->getMessage());
            return false ;
       }
       return true ;
    }
}