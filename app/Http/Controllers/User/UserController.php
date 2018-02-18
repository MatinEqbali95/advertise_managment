<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('User.index');
    }
    public function userInfo(){
        return view('User.userInfo');
    }

    public function updateUserInfo(Request $request){
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'tel' => 'required',
            'city' => 'required',
            'username'=>'required|min:6',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $request['password']=bcrypt($request['password']);
        Auth::user()->update($request->all());
        return redirect('/user/panel');


    }
}
