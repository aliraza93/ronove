<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
</head>
<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
		
        <!-- Header -->
        <div class="header">
        
            <!-- Logo -->
            <div class="header-left">
                <a href="{{ url('/') }}" class="logo">
                    <img src="img/logo.png" width="40" height="40" alt="">
                </a>
            </div>
            <!-- /Logo -->
            
            <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            
            <!-- Header Title -->
            <div class="page-title-box">
                <h3>Dreamguy's Technologies</h3>
            </div>
            <!-- /Header Title -->
            
            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
            
            <!-- Header Menu -->
            <ul class="nav user-menu">
            
                <!-- Search -->
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                       </a>
                        <form action="search">
                            <input class="form-control" type="text" placeholder="Search here">
                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </li>
                <!-- /Search -->
            
                <!-- Flag -->
                <li class="nav-item dropdown has-arrow flag-nav">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        <img src="img/flags/us.png" alt="" height="20"> <span>English</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="img/flags/us.png" alt="" height="16"> English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="img/flags/fr.png" alt="" height="16"> French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="img/flags/es.png" alt="" height="16"> Spanish
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="img/flags/de.png" alt="" height="16"> German
                        </a>
                    </div>
                </li>
                <!-- /Flag -->
            
                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="img/profiles/avatar-03.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="img/profiles/avatar-06.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <!-- /Notifications -->
                
                <!-- Message Notifications -->
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Messages</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="chat">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="img/profiles/avatar-09.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Richard Miles </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="chat">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="img/profiles/avatar-02.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">John Doe</span>
                                                <span class="message-time">6 Mar</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="chat">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="img/profiles/avatar-03.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Tarah Shropshire </span>
                                                <span class="message-time">5 Mar</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="chat">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="img/profiles/avatar-05.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Mike Litorus</span>
                                                <span class="message-time">3 Mar</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="chat">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="img/profiles/avatar-08.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Catherine Manseau </span>
                                                <span class="message-time">27 Feb</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="chat">View all Messages</a>
                        </div>
                    </div>
                </li>
                <!-- /Message Notifications -->

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img src="img/profiles/avatar-21.jpg" alt="">
                        <span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile">My Profile</a>
                        <a class="dropdown-item" href="settings">Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <!-- /Header Menu -->
            
            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile">My Profile</a>
                    <a class="dropdown-item" href="settings">Settings</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <!-- /Mobile Menu -->
            
        </div>
        <!-- /Header -->
        
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                @role('admin')
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title"> 
                                <span>Main</span>
                            </li>
                            <li> 
                                <a href="{{ url('/') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-cog"></i> <span> Systems</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="{{ url('system') }}">Systems</a></li>
                                    <li><a href="{{ url('organization') }}">Organizations</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @endrole
                @role('organization')
                    @php
                        $system = \App\Models\System::where('id', Illuminate\Support\Facades\Session::get('system_id'))->first();
                        $names = array();
                        $permissions = array();
                        if($system != null) {
                            if($system->hasRole('system')) {
                                $permissions = $system->getAllPermissions();
                            }
                        }
                        foreach ($permissions as $key => $permission) {
                            $names[$key] = $permission->name;
                        }
                        /*
                        if(in_array('Generate',$names)){
                            dd('ok');
                        }
                        else{
                            dd('No');
                        }
                        */
                        //dd($system->hasPermissionTo('Health&Safety'));
                    @endphp
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title"> 
                                <span>Main</span>
                            </li>
                            <li>
                                <a href="{{ route('employee.dashboard') }}"><i class="la la-dashboard"></i> <span> Dashboard</span> </a>
                            </li>
                            @if (in_array('Medicines',$names) || in_array('Dosage',$names) || in_array('Routes',$names))
                                <li class="menu-title"> 
                                    <span>Settings</span>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Settings</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        @if (in_array('Medicines',$names))
                                            <li><a href="medicines">Medicines</a></li>
                                        @endif
                                        @if (in_array('Dosage',$names))
                                            <li><a href="dosage">Dosage  <span class="badge badge-pill bg-primary float-right">1</span></a></li>
                                        @endif
                                        @if (in_array('Routes',$names))
                                            <li><a href="routes">Routes</a></li>
                                        @endif
                                    </ul>
                                </li>    
                            @endif
                            @if (in_array('Apps',$names) || in_array('Chat',$names) || in_array('Calls',$names) || in_array('Calendar',$names) || in_array('Contacts',$names) || in_array('Email',$names) || in_array('File Manager',$names))
                            <li class="submenu">
								<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    @if (in_array('Chat',$names))
									    <li><a href="{{ url('chat') }}">Chat</a></li>
                                    @endif
                                    @if (in_array('Calls',$names))
                                        <li class="submenu">
                                            <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                                            <ul style="display: none;">
                                                <li><a href="voice-call">Voice Call</a></li>
                                                <li><a href="video-call">Video Call</a></li>
                                                <li><a href="outgoing-call">Outgoing Call</a></li>
                                                <li><a href="incoming-call">Incoming Call</a></li>
                                            </ul>
                                        </li>
                                    @endif
                                    @if (in_array('Calendar',$names))
                                        <li><a href="events">Calendar</a></li>
                                    @endif
                                    @if (in_array('Contacts',$names))
                                        <li><a href="contacts">Contacts</a></li>
                                    @endif
                                    @if (in_array('Email',$names))
                                        <li><a href="inbox">Email</a></li>
                                    @endif
                                    @if (in_array('File Manager',$names))
                                        <li><a href="file-manager">File Manager</a></li>
                                    @endif        
                                </ul>
                            </li>
                            @endif
                            @if (in_array('All Employees',$names))
                                <li class="menu-title"> 
                                    <span>Employees</span>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="{{ url('employee') }}">All Employees</a></li>
                                        @if (in_array('Holidays',$names))
                                            <li><a href="holidays">Holidays</a></li>
                                        @endif
                                        @if (in_array('Leaves(Admin)',$names))
                                            <li><a href="leaves">Leaves (Admin)  <span class="badge badge-pill bg-primary float-right">1</span></a></li>
                                        @endif
                                        @if (in_array('Leaves(Employee)',$names))
                                            <li><a href="leaves-employee">Leaves (Employee)</a></li>
                                        @endif
                                        @if (in_array('Leave Settings',$names))
                                            <li><a href="leave-settings">Leaves Settings</a></li>
                                        @endif
                                        @if (in_array('Attendance(Admin)',$names))
                                            <li><a href="attendance">Attendance (Admin)</a></li>
                                        @endif
                                        @if (in_array('Attendance(Employee)',$names))
                                            <li><a href="attendance-employee">Attendance (Employee)</a></li>
                                        @endif
                                        @if (in_array('Departments',$names))
                                            <li><a href="departments">Departments</a></li>
                                        @endif
                                        @if (in_array('Designations',$names))
                                            <li><a href="designations">Designations</a></li>
                                        @endif
                                        @if (in_array('Timesheet',$names))
                                            <li><a href="timesheet">Timesheet</a></li>
                                        @endif
                                        @if (in_array('Overtime',$names))
                                            <li><a href="overtime">Overtime</a></li>
                                        @endif
                                    </ul>
                                </li>    
                            @endif
                            @if (in_array('Office Staff',$names) || in_array('Service Staff',$names) || in_array('Service Users',$names))
                                <li class="menu-title"> 
                                    <span>Users</span>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Users</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        @if (in_array('Office Staff',$names))
                                            <li><a href="medicines">Office Staff</a></li>
                                        @endif
                                        @if (in_array('Service Staff',$names))
                                            <li><a href="dosage">Service Staff  <span class="badge badge-pill bg-primary float-right">1</span></a></li>
                                        @endif
                                        @if (in_array('Service Users',$names))
                                            <li><a href="{{ url('service-user') }}">Service Users</a></li>
                                        @endif
                                    </ul>
                                </li>    
                            @endif
                            @if (in_array('Clients',$names))
                                <li> 
                                    <a href="{{ url('client') }}"><i class="la la-users"></i> <span>Clients</span></a>
                                </li>
                            @endif
                            @if (in_array('Projects',$names))
                                <li class="submenu">
                                    <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        @if (in_array('Projects',$names))
                                            <li> 
                                                <a href="projects"><i class="la la-users"></i> <span>Projects</span></a>
                                            </li>
                                        @endif
                                        @if (in_array('Tasks',$names))
                                            <li> 
                                                <a href="tasks"><i class="la la-users"></i> <span>Tasks</span></a>
                                            </li>
                                        @endif
                                        @if (in_array('Task Board',$names))
                                            <li> 
                                                <a href="task-board"><i class="la la-users"></i> <span>Task Board</span></a>
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                            @endif
                            @if (in_array('Leads',$names))
                                <li> 
                                    <a href="leads"><i class="la la-user-secret"></i> <span>Leads</span></a>
                                </li>
                            @endif
                            @if (in_array('Tickets',$names))
                                <li> 
                                    <a href="tickets"><i class="la la-ticket"></i> <span>Tickets</span></a>
                                </li>
                            @endif
                            @if (in_array('Estimates',$names) || in_array('Invoices',$names) || in_array('Payments',$names) || in_array('Expenses',$names) || in_array('Provident Fund',$names) || in_array('Taxes',$names))
                                <li class="menu-title"> 
                                    <span>HR</span>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="la la-files-o"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        @if (in_array('Estimates',$names))
                                            <li><a href="estimates">Estimates</a></li>
                                        @endif
                                        @if (in_array('Invoices',$names))
                                            <li><a href="invoices">Invoices</a></li>
                                        @endif
                                        @if (in_array('Payments',$names))
                                            <li><a href="payments">Payments</a></li>
                                        @endif
                                        @if (in_array('Expenses',$names))
                                            <li><a href="expenses">Expenses</a></li>
                                        @endif
                                        @if (in_array('Provident Fund',$names))
                                            <li><a href="provident-fund">Provident Fund</a></li>
                                        @endif
                                        @if (in_array('Taxes',$names))
                                            <li><a href="taxes">Taxes</a></li>
                                        @endif
                                    </ul>
                                </li>    
                            @endif
                            @if (in_array('Employee Salary',$names) || in_array('Pay Slip',$names) || in_array('Payroll Items',$names) )
                                <li class="submenu">
                                    <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="salary"> Employee Salary </a></li>
                                        @if (in_array('Payslip',$names))
                                            <li><a href="salary-view"> Payslip </a></li>
                                        @endif
                                        @if (in_array('Payroll Items',$names))
                                            <li><a href="payroll-items"> Payroll Items </a></li>
                                        @endif
                                        
                                    </ul>
                                </li>    
                            @endif
                            @if (in_array('Policies',$names))
                                <li> 
                                    <a href="policies"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
                                </li>
                            @endif
                            @if (in_array('Expense Report',$names) || in_array('Invoice Report',$names))
                                <li class="submenu">
                                    <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="expense-reports"> Expense Report </a></li>
                                        <li><a href="invoice-reports"> Invoice Report </a></li>
                                    </ul>
                                </li>
                            @endif
                            <!--
                                <li class="menu-title"> 
                                <span>Performance</span>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="performance-indicator"> Performance Indicator </a></li>
                                        <li><a href="performance"> Performance Review </a></li>
                                        <li><a href="performance-appraisal"> Performance Appraisal </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="goal-tracking"> Goal List </a></li>
                                        <li><a href="goal-type"> Goal Type </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="training"> Training List </a></li>
                                        <li><a href="trainers"> Trainers</a></li>
                                        <li><a href="training-type"> Training Type </a></li>
                                    </ul>
                                </li>
                                <li><a href="promotion"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
                                <li><a href="resignation"><i class="la la-external-link-square"></i> <span>Resignation</span></a></li>
                                <li><a href="termination"><i class="la la-times-circle"></i> <span>Termination</span></a></li>
                                <li class="menu-title"> 
                                    <span>Administration</span>
                                </li>
                                <li> 
                                    <a href="assets"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="jobs"> Manage Jobs </a></li>
                                        <li><a href="jobs-applicants"> Applied Candidates </a></li>
                                    </ul>
                                </li>
                                <li> 
                                    <a href="knowledgebase"><i class="la la-question"></i> <span>Knowledgebase</span></a>
                                </li>
                                <li> 
                                    <a href="activities"><i class="la la-bell"></i> <span>Activities</span></a>
                                </li>
                                <li> 
                                    <a href="users"><i class="la la-user-plus"></i> <span>Users</span></a>
                                </li>
                                <li> 
                                    <a href="settings"><i class="la la-cog"></i> <span>Settings</span></a>
                                </li>
                                <li class="menu-title"> 
                                    <span>Pages</span>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="profile"> Employee Profile </a></li>
                                        <li><a href="client-profile"> Client Profile </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="login"> Login </a></li>
                                        <li><a href="register"> Register </a></li>
                                        <li><a href="forgot-password"> Forgot Password </a></li>
                                        <li><a href="otp"> OTP </a></li>
                                        <li><a href="lock-screen"> Lock Screen </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="error-404">404 Error </a></li>
                                        <li><a href="error-500">500 Error </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="subscriptions"> Subscriptions (Admin) </a></li>
                                        <li><a href="subscriptions-company"> Subscriptions (Company) </a></li>
                                        <li><a href="subscribed-companies"> Subscribed Companies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="search"> Search </a></li>
                                        <li><a href="faq"> FAQ </a></li>
                                        <li><a href="terms"> Terms </a></li>
                                        <li><a href="privacy-policy"> Privacy Policy </a></li>
                                        <li><a href="blank-page"> Blank Page </a></li>
                                    </ul>
                                </li>
                                <li class="menu-title"> 
                                    <span>UI Interface</span>
                                </li>
                                <li> 
                                    <a href="components"><i class="la la-puzzle-piece"></i> <span>Components</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="form-basic-inputs">Basic Inputs </a></li>
                                        <li><a href="form-input-groups">Input Groups </a></li>
                                        <li><a href="form-horizontal">Horizontal Form </a></li>
                                        <li><a href="form-vertical"> Vertical Form </a></li>
                                        <li><a href="form-mask"> Form Mask </a></li>
                                        <li><a href="form-validation"> Form Validation </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="la la-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="tables-basic">Basic Tables </a></li>
                                        <li><a href="data-tables">Data Table </a></li>
                                    </ul>
                                </li>
                                <li class="menu-title"> 
                                    <span>Extras</span>
                                </li>
                                <li> 
                                    <a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
                                </li>
                                <li> 
                                    <a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span class="badge badge-primary ml-auto">v3.4</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                                            <ul style="display: none;">
                                                <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                                    <ul style="display: none;">
                                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"> <span>Level 1</span></a>
                                        </li>
                                    </ul>
                                </li>    
                            -->
                        </ul>
                    </div>		
                @endrole
                @role('employee')
                    @php
                    $system = \App\Models\System::where('id', Illuminate\Support\Facades\Session::get('system_id'))->first();
                    $names = array();
                    $permissions = array();
                    if(Auth::check()) {
                        if(Auth::user()->hasRole('employee')) {
                            $permissions = Auth::user()->getAllPermissions();
                        }
                    }
                    foreach ($permissions as $key => $permission) {
                        $names[$key] = $permission->name;
                    }
                    /*
                    if(in_array('Generate',$names)){
                        dd('ok');
                    }
                    else{
                        dd('No');
                    }
                    */
                    //dd($system->hasPermissionTo('Health&Safety'));
                @endphp
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title"> 
                            <span>Main</span>
                        </li>
                        <li>
                            <a href="{{ route('employee.dashboard') }}"><i class="la la-dashboard"></i> <span> Dashboard</span> </a>
                        </li>
                        @if (in_array('Medicines',$names) || in_array('Dosage',$names) || in_array('Routes',$names))
                            <li class="menu-title"> 
                                <span>Settings</span>
                            </li>
                            <li class="submenu">
                                <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Settings</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    @if (in_array('Medicines',$names))
                                        <li><a href="medicines">Medicines</a></li>
                                    @endif
                                    @if (in_array('Dosage',$names))
                                        <li><a href="dosage">Dosage  <span class="badge badge-pill bg-primary float-right">1</span></a></li>
                                    @endif
                                    @if (in_array('Routes',$names))
                                        <li><a href="routes">Routes</a></li>
                                    @endif
                                </ul>
                            </li>    
                        @endif
                        @if (in_array('Apps',$names) || in_array('Chat',$names) || in_array('Calls',$names) || in_array('Calendar',$names) || in_array('Contacts',$names) || in_array('Email',$names) || in_array('File Manager',$names))
                        <li class="submenu">
                            <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                @if (in_array('Chat',$names))
                                    <li><a href="{{ url('chat') }}">Chat</a></li>
                                @endif
                                @if (in_array('Calls',$names))
                                    <li class="submenu">
                                        <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                                        <ul style="display: none;">
                                            <li><a href="voice-call">Voice Call</a></li>
                                            <li><a href="video-call">Video Call</a></li>
                                            <li><a href="outgoing-call">Outgoing Call</a></li>
                                            <li><a href="incoming-call">Incoming Call</a></li>
                                        </ul>
                                    </li>
                                @endif
                                @if (in_array('Calendar',$names))
                                    <li><a href="events">Calendar</a></li>
                                @endif
                                @if (in_array('Contacts',$names))
                                    <li><a href="contacts">Contacts</a></li>
                                @endif
                                @if (in_array('Email',$names))
                                    <li><a href="inbox">Email</a></li>
                                @endif
                                @if (in_array('File Manager',$names))
                                    <li><a href="file-manager">File Manager</a></li>
                                @endif        
                            </ul>
                        </li>
                        @endif
                        @if (in_array('All Employees',$names))
                            <li class="menu-title"> 
                                <span>Employees</span>
                            </li>
                            <li class="submenu">
                                <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="{{ url('employee') }}">All Employees</a></li>
                                    @if (in_array('Holidays',$names))
                                        <li><a href="holidays">Holidays</a></li>
                                    @endif
                                    @if (in_array('Leaves(Admin)',$names))
                                        <li><a href="leaves">Leaves (Admin)  <span class="badge badge-pill bg-primary float-right">1</span></a></li>
                                    @endif
                                    @if (in_array('Leaves(Employee)',$names))
                                        <li><a href="leaves-employee">Leaves (Employee)</a></li>
                                    @endif
                                    @if (in_array('Leave Settings',$names))
                                        <li><a href="leave-settings">Leaves Settings</a></li>
                                    @endif
                                    @if (in_array('Attendance(Admin)',$names))
                                        <li><a href="attendance">Attendance (Admin)</a></li>
                                    @endif
                                    @if (in_array('Attendance(Employee)',$names))
                                        <li><a href="attendance-employee">Attendance (Employee)</a></li>
                                    @endif
                                    @if (in_array('Departments',$names))
                                        <li><a href="departments">Departments</a></li>
                                    @endif
                                    @if (in_array('Designations',$names))
                                        <li><a href="designations">Designations</a></li>
                                    @endif
                                    @if (in_array('Timesheet',$names))
                                        <li><a href="timesheet">Timesheet</a></li>
                                    @endif
                                    @if (in_array('Overtime',$names))
                                        <li><a href="overtime">Overtime</a></li>
                                    @endif
                                </ul>
                            </li>    
                        @endif
                        @if (in_array('Office Staff',$names) || in_array('Service Staff',$names) || in_array('Service Users',$names))
                            <li class="menu-title"> 
                                <span>Users</span>
                            </li>
                            <li class="submenu">
                                <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Users</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    @if (in_array('Office Staff',$names))
                                        <li><a href="medicines">Office Staff</a></li>
                                    @endif
                                    @if (in_array('Service Staff',$names))
                                        <li><a href="dosage">Service Staff  <span class="badge badge-pill bg-primary float-right">1</span></a></li>
                                    @endif
                                    @if (in_array('Service Users',$names))
                                        <li><a href="{{ url('service-user') }}">Service Users</a></li>
                                    @endif
                                </ul>
                            </li>    
                        @endif
                        @if (in_array('Clients',$names))
                            <li> 
                                <a href="{{ url('client') }}"><i class="la la-users"></i> <span>Clients</span></a>
                            </li>
                        @endif
                        @if (in_array('Projects',$names))
                            <li class="submenu">
                                <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    @if (in_array('Projects',$names))
                                        <li> 
                                            <a href="projects"><i class="la la-users"></i> <span>Projects</span></a>
                                        </li>
                                    @endif
                                    @if (in_array('Tasks',$names))
                                        <li> 
                                            <a href="tasks"><i class="la la-users"></i> <span>Tasks</span></a>
                                        </li>
                                    @endif
                                    @if (in_array('Task Board',$names))
                                        <li> 
                                            <a href="task-board"><i class="la la-users"></i> <span>Task Board</span></a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                        @endif
                        @if (in_array('Leads',$names))
                            <li> 
                                <a href="leads"><i class="la la-user-secret"></i> <span>Leads</span></a>
                            </li>
                        @endif
                        @if (in_array('Tickets',$names))
                            <li> 
                                <a href="tickets"><i class="la la-ticket"></i> <span>Tickets</span></a>
                            </li>
                        @endif
                        @if (in_array('Estimates',$names) || in_array('Invoices',$names) || in_array('Payments',$names) || in_array('Expenses',$names) || in_array('Provident Fund',$names) || in_array('Taxes',$names))
                            <li class="menu-title"> 
                                <span>HR</span>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-files-o"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    @if (in_array('Estimates',$names))
                                        <li><a href="estimates">Estimates</a></li>
                                    @endif
                                    @if (in_array('Invoices',$names))
                                        <li><a href="invoices">Invoices</a></li>
                                    @endif
                                    @if (in_array('Payments',$names))
                                        <li><a href="payments">Payments</a></li>
                                    @endif
                                    @if (in_array('Expenses',$names))
                                        <li><a href="expenses">Expenses</a></li>
                                    @endif
                                    @if (in_array('Provident Fund',$names))
                                        <li><a href="provident-fund">Provident Fund</a></li>
                                    @endif
                                    @if (in_array('Taxes',$names))
                                        <li><a href="taxes">Taxes</a></li>
                                    @endif
                                </ul>
                            </li>    
                        @endif
                        @if (in_array('Employee Salary',$names) || in_array('Pay Slip',$names) || in_array('Payroll Items',$names) )
                            <li class="submenu">
                                <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="salary"> Employee Salary </a></li>
                                    @if (in_array('Payslip',$names))
                                        <li><a href="salary-view"> Payslip </a></li>
                                    @endif
                                    @if (in_array('Payroll Items',$names))
                                        <li><a href="payroll-items"> Payroll Items </a></li>
                                    @endif
                                    
                                </ul>
                            </li>    
                        @endif
                        @if (in_array('Policies',$names))
                            <li> 
                                <a href="policies"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
                            </li>
                        @endif
                        @if (in_array('Expense Report',$names) || in_array('Invoice Report',$names))
                            <li class="submenu">
                                <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="expense-reports"> Expense Report </a></li>
                                    <li><a href="invoice-reports"> Invoice Report </a></li>
                                </ul>
                            </li>
                        @endif
                        <!--
                            <li class="menu-title"> 
                            <span>Performance</span>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="performance-indicator"> Performance Indicator </a></li>
                                    <li><a href="performance"> Performance Review </a></li>
                                    <li><a href="performance-appraisal"> Performance Appraisal </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="goal-tracking"> Goal List </a></li>
                                    <li><a href="goal-type"> Goal Type </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="training"> Training List </a></li>
                                    <li><a href="trainers"> Trainers</a></li>
                                    <li><a href="training-type"> Training Type </a></li>
                                </ul>
                            </li>
                            <li><a href="promotion"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
                            <li><a href="resignation"><i class="la la-external-link-square"></i> <span>Resignation</span></a></li>
                            <li><a href="termination"><i class="la la-times-circle"></i> <span>Termination</span></a></li>
                            <li class="menu-title"> 
                                <span>Administration</span>
                            </li>
                            <li> 
                                <a href="assets"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="jobs"> Manage Jobs </a></li>
                                    <li><a href="jobs-applicants"> Applied Candidates </a></li>
                                </ul>
                            </li>
                            <li> 
                                <a href="knowledgebase"><i class="la la-question"></i> <span>Knowledgebase</span></a>
                            </li>
                            <li> 
                                <a href="activities"><i class="la la-bell"></i> <span>Activities</span></a>
                            </li>
                            <li> 
                                <a href="users"><i class="la la-user-plus"></i> <span>Users</span></a>
                            </li>
                            <li> 
                                <a href="settings"><i class="la la-cog"></i> <span>Settings</span></a>
                            </li>
                            <li class="menu-title"> 
                                <span>Pages</span>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="profile"> Employee Profile </a></li>
                                    <li><a href="client-profile"> Client Profile </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="login"> Login </a></li>
                                    <li><a href="register"> Register </a></li>
                                    <li><a href="forgot-password"> Forgot Password </a></li>
                                    <li><a href="otp"> OTP </a></li>
                                    <li><a href="lock-screen"> Lock Screen </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="error-404">404 Error </a></li>
                                    <li><a href="error-500">500 Error </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="subscriptions"> Subscriptions (Admin) </a></li>
                                    <li><a href="subscriptions-company"> Subscriptions (Company) </a></li>
                                    <li><a href="subscribed-companies"> Subscribed Companies</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="search"> Search </a></li>
                                    <li><a href="faq"> FAQ </a></li>
                                    <li><a href="terms"> Terms </a></li>
                                    <li><a href="privacy-policy"> Privacy Policy </a></li>
                                    <li><a href="blank-page"> Blank Page </a></li>
                                </ul>
                            </li>
                            <li class="menu-title"> 
                                <span>UI Interface</span>
                            </li>
                            <li> 
                                <a href="components"><i class="la la-puzzle-piece"></i> <span>Components</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="form-basic-inputs">Basic Inputs </a></li>
                                    <li><a href="form-input-groups">Input Groups </a></li>
                                    <li><a href="form-horizontal">Horizontal Form </a></li>
                                    <li><a href="form-vertical"> Vertical Form </a></li>
                                    <li><a href="form-mask"> Form Mask </a></li>
                                    <li><a href="form-validation"> Form Validation </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="tables-basic">Basic Tables </a></li>
                                    <li><a href="data-tables">Data Table </a></li>
                                </ul>
                            </li>
                            <li class="menu-title"> 
                                <span>Extras</span>
                            </li>
                            <li> 
                                <a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
                            </li>
                            <li> 
                                <a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span class="badge badge-primary ml-auto">v3.4</span></a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li class="submenu">
                                        <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                                        <ul style="display: none;">
                                            <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                            <li class="submenu">
                                                <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                                <ul style="display: none;">
                                                    <li><a href="javascript:void(0);">Level 3</a></li>
                                                    <li><a href="javascript:void(0);">Level 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> <span>Level 1</span></a>
                                    </li>
                                </ul>
                            </li>    
                        -->
                    </ul>
                </div>
                @endrole
            </div>
        </div>
        <!-- /Sidebar -->
        @yield('content')
    </div>
    	
    <!-- Bootstrap Core JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <!-- Slimscroll JS -->
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>    
    
    <!-- Custom JS -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
