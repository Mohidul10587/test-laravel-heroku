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
                <a class="menu-item" href="fomrs_editor_ch.html" aria-expanded="false">
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
        <section class="counter_area">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-code"></i></span>
                            <h2 class="timer count-number" data-to="{{count($data[0])}}" data-speed="1500"></h2>
                        </div>

                        <h5 class="count-text ">Total Pending Jobs</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-coffee"></i></span>
                            <h2 class="timer count-number" data-to="{{count($data[1])}}" data-speed="1500"></h2>
                        </div>
                        <h5 class="count-text ">Total User</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fas fa-user"></i></span>
                            <h2 class="timer count-number" data-to="{{$data[2]}}" data-speed="1500"></h2>
                        </div>
                        <h5 class="count-text ">Total Payment</h5>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-bug"></i></span>
                            <h2 class="timer count-number" data-to="157" data-speed="1500"></h2>
                        </div>
                        <h5 class="count-text ">Totlal Completed Jobs</h5>
                    </div>
                </div>
            </div>
        </section>

        <!-- all jobs information starts here -->

        <h2 style="text-align: center;">All Pending Jobs</h2>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead style="border: 1px solid gray; background-color:#668cff; color:white;">
                            <th style="text-align: center; padding: 4px 20px">Employee's Email</th>
                            <th style="text-align: center; padding: 4px 20px">Job Id</th>
                            <th style="text-align: center; padding: 4px 20px">Folder Name</th>
                            <th style="text-align: center; padding: 4px 20px">Job Type</th>
                            <th style="text-align: center; padding: 4px 20px">Total Image</th>
                            <th style="text-align: center; padding: 4px 20px">Amount</th>
                            <th style="text-align: center; padding: 4px 20px">Google Drive Link</th>
                            <th style="text-align: center; padding: 4px 20px">Deadline Date</th>
                            <th style="text-align: center; padding: 4px 20px">Deadline time</th>
                        </thead>
                        <tbody>

                            @foreach($data[0] as $job)

                            <tr style="border: 1px solid gray;">
                                <td style="text-align: center; padding:10px;">{{$job->empoyee_name}}</td>
                                <td style="text-align: center; padding:10px;">{{$job->id}}</td>
                                <td style="text-align: center; padding:10px;">{{$job->folder_name}}</td>
                                <td style="text-align: center; padding:10px;">{{$job->job_type}}</td>
                                <td style="text-align: center; padding:10px;">{{$job->total_image}}</td>
                                <td style="text-align: center; padding:10px;">{{$job->amount}}</td>
                                <td style="text-align: center; padding:10px;"><a href="{{$job->goole_drive_link}}">Link</a></td>
                                <td style="text-align: center; padding:10px;">{{$job->deadline_date}}</td>
                                <td style="text-align: center; padding:10px;">{{$job->deadline_time}}</td>

                            </tr>

                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!-- all jobs information ends here -->

    </div>
    <!--/middle content wrapper-->
</div>
<!--/ content wrapper -->
@endsection