<?php

namespace App\Http\Controllers;

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
        dd($request->all());
    }
}
