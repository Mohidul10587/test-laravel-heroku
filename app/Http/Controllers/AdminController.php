<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index (){
        return view('admin.admin_login');
    } //end Method
    public function Dashboard (){
        return view('admin.index');
    }//end Method

    public function Login (Request $request){
        // dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'] , 'password' => $check['password'] ])){
            return redirect()->route('admin.dashboard')->with('error',"Admin log in successfully");
        }else{
            return back()->with('error','Invalid user or password');
        }
    }

// public function AdminLogout (){
//     Auth::guard('Admin')->logout();
//     return redirect()->route('login_form')->with('error',"Admin logout successfully");

// }

}
