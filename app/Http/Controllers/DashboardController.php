<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
   public function getDashboard()
   {
      return view('dashboard');
   }

   public function showJobs()
   {
      $jobs = DB::table('jobs')->get()->toArray();

      return view('dashboard', ['jobs' => $jobs]);
   }



}
