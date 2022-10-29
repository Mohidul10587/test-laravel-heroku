<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function Index()
    {
        return view('admin.admin_login');
    } //end Method
    public function Dashboard()
    {
        return view('admin.index');
    } //end Method

    public function Login(Request $request)
    {
        // dd($request->all());
        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.dashboard')->with('error', "Admin log in successfully");
        } else {
            return back()->with('error', 'Invalid user or password');
        }
    }

    // get all user
    public function getAllJobs()
    {
        $jobs = DB::table('jobs')->get()->toArray();
        $users =  DB::table('users')->get()->toArray();
        $amount = DB::table("jobs")->get()->sum("amount");

        //  dd($users);
        return view('admin.index', ['data' => [$jobs, $users, $amount]]);
    }

    public function AdminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('error', "Admin logout successfully");
    }


}
