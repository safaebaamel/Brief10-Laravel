<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\Admin;

class AdminController extends Controller
{
    public function loginAdmin() {
        return view('admin.login');
    }

    function submit_login(Request $request){
    	$this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

    	$userCheck=Admin::where(['email'=>$request->email,'password'=>$request->password])->count();
    	if($userCheck>0){
            $adminData=Admin::where(['email'=>$request->email,'password'=>$request->password])->first();
            session(['adminData'=>$adminData]);
    		return redirect('admin/dashboard');
            // if (session('adminData')) {
            //     dd(session('adminData')->id);
            // } else {
            //     dd('no');
            // }
    	}else{
    		return redirect('admin/login')->with('error','Invalid username/password!!');
    	}

    }

    function dashboard(){
        // $posts=Post::orderBy('id','desc')->get();
    	return view('admin.dashboard');
    }
}
