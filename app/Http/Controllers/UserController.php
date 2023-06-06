<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\User\UserRequest;
use App\Http\Services\Users\UserService;

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

    public function show(User $user){
        return view('admin.edit',[
            'title'=>'Edit User',
            'users'=>$user,
        ]);
    }

    public function destroy($id){
        // try {
        //     User::where($user->id)->delete();
        //     return \response()->json([
        //         'success'=> true,
        //         'message'=>'Delete Successfully'
        //     ]);
        // } catch (\Exception $th) {
        //     return \response()->json([
        //         'success'=> false , 'mgs'=>$e->getMessage()
        //     ]);
        // }
        
        try {
            $user = User::find($id);
            $user->delete();
            session()->flash('success', 'Xóa user thành công');
            return response()->json([
                'success'=>'Delete successfully!'
            ]);
        } catch (\Exception $th) {
            return \response()->json([
                'success'=> false , 'mgs'=>$e->getMessage()
            ]);
        }

    }
}
