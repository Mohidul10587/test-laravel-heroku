@extends ('admin.admin_master')
@section('admin')


<header class="header_area">
    <!-- logo -->
    <div class="sidebar_logo">
        <a href="index.html">
            <img src="  {{ asset('panel/assets/images/logo.png')}}" alt="" class="img-fluid logo1">
            <img src="  {{ asset('panel/assets/images/logo_small.png')}}" alt="" class="img-fluid logo2">
        </a>
    </div>
    <div class="sidebar_btn">
        <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
    </div>

    <ul class="header_menu">
        <li> <a style="color:white" href="/admin/allemployee">All Employee</a></li>
        <li> <a style="color:white" href="/admin/register">Add a User</a></li>
        <li> <a style="color:white" href="/admin/jobform">Post A Job</a></li>
        <li> <a style="color:white" href="/admin/dashboard">Dashboard</a></li>
        <li><a data-toggle="dropdown" href="#"><i class="far fa-user"></i></a>
            <div class="user_item dropdown-menu dropdown-menu-right">
                <div class="admin">
                    <a href="#" class="user_link"><img src="panel/assets/images/admin.jpg" alt=""></a>
                </div>
                <ul>
                    <li><a href="#"><span><i class="fas fa-user"></i></span> User Profile</a></li>
                    <li><a href=" "><span><i class="fas fa-cogs"></i></span> Password Change</a></li>
                    <li>
                        <a href="logout"><span><i class="fas fa-unlock-alt"></i></span> Logout</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>

            <a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
</header>
<!-- / header area -->
<!-- sidebar area -->
<aside class="sidebar-wrapper ">
    <nav class="sidebar-nav">
        <ul class="metismenu" id="menu1">
            <li class="single-nav-wrapper">
                <a href="/admin/jobform" class="menu-item">
                    <span class="left-icon"><i class="fas fa-home"></i></span>
                    <span class="menu-text">Post a Job</span>

                </a>
            </li>
            <li class="single-nav-wrapper">
                <a class="menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="far fa-edit"></i></span>
                    <span class="menu-text">Forms</span>
                </a>
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="fas fa-table"></i></span>
                    <span class="menu-text">table</span>
                </a>
                <ul class="dashboard-menu">
                    <li><a href="basic_table.html">Basic table</a></li>
                    <li><a href="data_table.html">data table</a></li>
                </ul>
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="fas fa-chart-line"></i></span>
                    <span class="menu-text">Charts</span>
                </a>
                <ul class="dashboard-menu">
                    <li><a href="chart-float.html">Float Chart</a></li>
                    <li><a href="chart-float.html">Float Chart</a></li>
                    <li><a href="chart-float.html">Float Chart</a></li>
                </ul>
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="fas fa-sort-alpha-down-alt"></i></span>
                    <span class="menu-text">UI Elements</span>
                </a>

            </li>

            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="left-icon"><i class="far fa-envelope"></i></span>
                    <span class="menu-text">Mailbox</span>
                </a>

            </li>


        </ul>
    </nav>
</aside><!-- /sidebar Area-->






<div class="content_wrapper">
    <!--middle content wrapper-->
    <div class="middle_content_wrapper">
        <!-- counter_area -->

        @if(Session::has('massage'))
        <div style="border: 1px green solid;" class="ml-2 mr-2 alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session::get('massage')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <h2 style="text-align: center; font-weight:bolder;">Job Info</h2>

        <form action="posted-jobs-data" method="post">
            @csrf

            <div style="display: flex; justify-content:center">

                <div style="width:650px; display: flex; justify-content:space-between">
                    <div>
                        <p style="text-align: center; font-weight:bolder; margin-bottom:-3px; margin-top:10px"><label for="deadline_date">Folder Name</label><br></p>
                        <input style="width: 300px;  height:40px;  border:1px solid gray; border-radius:5px; padding-left:5px; " type="text" name="folder_name" required> <br>
                        <p style="text-align: center; font-weight:bolder; margin-bottom:-3px; margin-top:10px"><label for="deadline_date">Job Id</label><br></p>
                        <input style="width: 300px;  height:40px;  border:1px solid gray; border-radius:5px; padding-left:5px; " type="number" name="job_id" required><br>
                        <p style="text-align: center; font-weight:bolder; margin-bottom:-3px; margin-top:10px"><label for="deadline_date">Job Type</label><br></p>
                        <input style="width: 300px;  height:40px;  border:1px solid gray; border-radius:5px; padding-left:5px; " type="text" name="job_type" required><br>
                        <p style="text-align: center; font-weight:bolder; margin-bottom:-3px; margin-top:10px"><label for="deadline_date">Instruction</label><br></p>
                        <textarea style="width: 300px;  height:40px;  border:1px solid gray; border-radius:5px " type="text" name="instruction" required></textarea><br>
                        <p style="text-align: center; font-weight:bolder; margin-bottom:-3px; margin-top:10px"><label for="deadline_date">Total Image</label><br></p>
                        <input style="width: 300px;  height:40px;  border:1px solid gray; border-radius:5px; padding-left:5px;" type="number" name="total_image" required> <br>


                    </div>
                    <div>
                        <p style="text-align: center; font-weight:bolder; margin-bottom:-3px; margin-top:10px"><label for="deadline_date">Amount</label><br></p>
                        <input style="width: 300px;  height:40px;  border:1px solid gray; border-radius:5px; padding-left:5px; " type="number" name="amount" required> <br>

                        <p style="text-align: center; font-weight:bolder; margin-bottom:-3px; margin-top:10px"><label for="deadline_date">Google Drive Link</label><br></p>
                        <input style="width: 300px;  height:40px;  border:1px solid gray; border-radius:5px; padding-left:5px; " type="url" name="goole_drive_link" required><br>
                        <p style="text-align: center; font-weight:bolder; margin-bottom:-3px; margin-top:10px"><label for="deadline_date">Deadline_date</label><br></p>
                        <input style="width: 300px;  height:40px;  border:1px solid gray; border-radius:5px; padding-left:5px; " type="date" id='deadline_date' name="deadline_date" required><br>
                        <p style="text-align: center; font-weight:bolder; margin-bottom:-1px; margin-top:15px"><label for="deadline_time" style="margin-bottom: -10px;">Deadline_time</label></p>
                        <input style="width: 300px; height:40px;  border:1px solid gray; border-radius:5px; padding-left:5px; " type="time" id='deadline_time' name="deadline_time" required>
                        <p style="text-align: center; font-weight:bolder; margin-bottom:-3px; margin-top:18px"><label for="empoyee_name">Assign to..</label></p>
                        <select style="width: 300px;  height:40px; border:1px solid gray; border-radius:5px " name="empoyee_name" id="empoyee_name" required>
                            <option value="volvo">Employee Name</option>

                            @foreach ($users as $user)
                            <option value="{{ $user->email }}">
                                {{ $user->name }}
                            </option>
                            @endforeach
                        </select><br>
                    </div>

                </div>

            </div>

            <div style="display:flex;justify-content:center">

                <button style="width: 300px;  height:40px; margin-top: 30px; border:1px solid gray; border-radius:5px ; background-color:white;" type="submit">Submit</button>
            </div>
        </form>

    </div>
    <!--/middle content wrapper-->
</div>











@endsection