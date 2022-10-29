<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllEmployeeController extends Controller
{
    public function getAllEmployeePage()
    {
        
        $users =  DB::table('users')->get()->toArray();
        return view('admin.allemployee',["users"=>$users]);
    }
}
