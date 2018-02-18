<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.index');
    }

    public function adminInfo(){
        return view('Admin.adminInfo');
    }

    public function updateAdminInfo(Request $request){
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
        return redirect('/admin/panel');


    }

}
