<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index(){
        return view('admin.home');
    }

    public function createNewUser(){
        return view('admin.createNewUser',[
            'title'=>'Create New User'
        ]);
    }

    public function dashboard(){
        return view('admin.dashboard', [
            'title'=>'My Balance Dashboard'
        ]);
    }

}
