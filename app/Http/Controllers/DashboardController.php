<?php

namespace App\Http\Controllers;

use App\Mail\CompleteNotificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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




   public function sendEmailToAdmin()
   {
      $data = [
         'subject' => 'Job Complete',
      ];
      Mail::to('rakibsheikh0059@gmail.com')->send(new CompleteNotificationMail($data));
      
      $jobs = DB::table('jobs')->get()->toArray();
      return view('dashboard', ['jobs' => $jobs]);
   }
}
