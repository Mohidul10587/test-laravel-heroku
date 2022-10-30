<?php

namespace App\Http\Controllers;

use App\Mail\CompleteNotificationMail;
use App\Models\Complete;
use App\Models\CompleteJob;
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




    public function sendEmailToAdmin(Request $req)
    {
        // $data = [
        //     'subject' => 'Job Complete',
        // ];
        // Mail::to('rakibsheikh0059@gmail.com')->send(new CompleteNotificationMail($data));


        $complete = new Complete();
        $complete->folder_name = $req->folder_name;
        $complete->save();

        $jobs = DB::table('jobs')->get()->toArray();
        return redirect('dashboard');
    }
}
