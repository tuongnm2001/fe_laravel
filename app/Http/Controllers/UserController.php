<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Users\UserService;
use App\Http\Requests\User\UserRequest;

class UserController extends Controller{

    protected $userService ;

    public function __construct(UserService $userService){
        $this->userService = $userService; 
    }

    public function listService(){
        return view('admin.listService',[
            'title'=>"All Registered Users",
            'listUsers' =>$this->userService->getAllUser()
        ]);
    }

    public function create(){
        return view('admin.createNewUser',[
            'title'=>'Create New User'
        ]);
    }

    public function store(UserRequest $request){
        $this->userService->insert($request);
        return redirect()->back();
    }
}
