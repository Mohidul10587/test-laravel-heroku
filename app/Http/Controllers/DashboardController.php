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
        $complete = new Complete();
        $complete->folder_name = $req->folder_name;
        $complete->job_id = $req->job_id;
        $complete->job_type = $req->job_type;
        $complete->instruction = $req->instruction;
        $complete->total_image = $req->total_image;
        $complete->amount = $req->amount;
        $complete->google_drive_link = $req->google_drive_link;
        $complete->employee_email = $req->employee_email;
        $complete->employee_name = $req->employee_name;
        $complete->save();



        // $data = [
        //     'subject' => 'Job Complete',
        //         ];
        // Mail::to('rakibsheikh0059@gmail.com')->send(new CompleteNotificationMail($data));

        DB::delete('delete from jobs where id = ?',[$req->id]);

        return redirect('dashboard');
    }
}
