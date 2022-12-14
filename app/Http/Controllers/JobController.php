<?php

namespace App\Http\Controllers;

use App\Mail\JobMail;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class JobController extends Controller
{
    public function getJobPage()
    {
        return view("admin.jobform");
    }
    public function sendPostedJobsData(Request $req)
    {
        $postedData = new Job;
        $postedData->folder_name = $req->folder_name;
        $postedData->job_id = $req->job_id;
        $postedData->job_type = $req->job_type;
        $postedData->instruction = $req->instruction;
        $postedData->total_image = $req->total_image;
        $postedData->amount = $req->amount;
        $postedData->goole_drive_link = $req->goole_drive_link;
        $postedData->deadline_date = $req->deadline_date;
        $postedData->deadline_time = $req->deadline_time;
        $postedData->empoyee_name = $req->empoyee_name;
        $postedData->save();
$data=[
    'subject'=>'Hi Friend , A new job has assigned for you ',
    'job_type'=>$req->job_type,
    'total_image'=>$req->total_image,
    'amount'=>$req->amount,
    'instruction'=> $req->instruction,
    'folder_name'=>$req->folder_name,
    'goole_drive_link' => $req->goole_drive_link,

];

        Mail::to($req->empoyee_name)->send(new JobMail($data));
        return redirect('/admin/jobform')->with('massage', "Job sent successfully ");

    }


    public function getUsers()
    {
        $users =  DB::table('users')->get()->toArray();
        return view('admin.jobform', ['users' => $users]);
    }


}
