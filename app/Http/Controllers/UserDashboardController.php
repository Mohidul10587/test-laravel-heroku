<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserDashboardController extends Controller
{
   public function getDashboard (){
    return view('userdashboard');
   }

   public function showJobs(Request $request) {
    $jobs = DB::table('jobs')->get()->toArray();
    dd($jobs );
   //  return view(['jobs'=>$jobs]);
 }



}
