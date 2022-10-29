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
        <li> <a style="color:white" href="/dashboard">User Board</a></li>
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


<div>

    <!-- All employee starts here -->
    <h2 style="text-align: center;">List of Employees</h2>

    <div style="display: flex; justify-content:center;margin-top:40px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead style="border: 1px solid gray; background-color:#668cff; color:white;">
                            <th style="text-align: center; padding: 10px 80px">Name</th>
                            <th style="text-align: center; padding: 10px 80px">Email</th>
                            <th style="text-align: center; padding: 10px 80px">Phone No</th>
                            <th style="text-align: center; padding: 10px 80px">Delete</th>



                        </thead>
                        <tbody>

                            @foreach($users as $user)

                            <tr style="border: 1px solid gray;">
                                <td style="text-align: center; padding:10px;">{{$user->name}}</td>
                                <td style="text-align: center; padding:10px;">{{$user->email}}</td>
                                <td style="text-align: center; padding:10px;"><a href="tel:+8801744790726">Shuvo's
                                        Number</a></td>
                                <td style="text-align: center; padding:10px;"><a
                                        href="/admin/delete_employee/{{$user->id}}">Remove The Employee</a></td>
                            </tr>

                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>













@endsection