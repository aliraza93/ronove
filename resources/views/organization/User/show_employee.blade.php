@extends('layouts.main')

@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper" id="employee_details">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    @if (session()->has('alert'))
                        <div class="alert alert-dismissable alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>
                                {{ Session::get('alert') }}
                            </strong>
                        </div>
                    @endif
                    <h3 class="page-title">Profile</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="card mb-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-view">
                            <div class="profile-img-wrap">
                                <div class="profile-img">
                                    <a href="#"><img alt="" src="img/profiles/avatar-02.jpg"></a>
                                </div>
                            </div>
                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile-info-left">
                                            <h3 class="user-name m-t-0 mb-0">{{ !empty($employee) ?  $employee->first_name : '' }} {{ !empty($employee) ? $employee->last_name : '' }} </h3>
                                            <h6 class="text-muted">UI/UX Design Team</h6>
                                            <small class="text-muted">Web Designer</small>
                                            <div class="staff-id">ID : {{ $employee->id }}</div>
                                            <div class="small doj text-muted">Date of Join : {{ $employee->created_at }}</div>
                                            <div class="staff-msg"><a class="btn btn-custom" href="chat">Send Message</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Phone:</div>
                                                <div class="text"><a href="">{{ $employee->phone }}</a></div>
                                            </li>
                                            <li>
                                                <div class="title">Email:</div>
                                                <div class="text"><a href="">{{ $employee->email }}</a></div>
                                            </li>
                                            <li>
                                                <div class="title">Birthday:</div>
                                                <div class="text">24th July</div>
                                            </li>
                                            <li>
                                                <div class="title">Address:</div>
                                                <div class="text">{{ $employee->address }}</div>
                                            </li>
                                            <li>
                                                <div class="title">Gender:</div>
                                                <div class="text">{{ $employee->gender }}</div>
                                            </li>
                                            <li>
                                                <div class="title">Reports to:</div>
                                                <div class="text">
                                                    <div class="avatar-box">
                                                        <div class="avatar avatar-xs">
                                                            <img src="img/profiles/avatar-16.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <a href="profile">
                                                        Jeffery Lalor
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card tab-box">
                <div class="row user-tabs">
                    <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                        <ul class="nav nav-tabs nav-tabs-bottom">
                            <li class="nav-item"><a href="#emp_profile" data-toggle="tab" class="nav-link active">Personal Details</a></li>
                            <li class="nav-item"><a href="#mar-sheet" data-toggle="tab" class="nav-link">MAR Sheet</a></li>
                            <li class="nav-item"><a href="#emp_projects" data-toggle="tab" class="nav-link">Projects</a></li>
                            <li class="nav-item"><a href="#emp_health" data-toggle="tab" class="nav-link">Health</a></li>
                            <li class="nav-item"><a href="#bank_details" data-toggle="tab" class="nav-link">Bank Details</a></li>
                            <li class="nav-item"><a href="#etw" data-toggle="tab" class="nav-link">Education, Training and Work</a></li>
                            <li class="nav-item"><a href="#schedule" data-toggle="tab" class="nav-link">Schedule</a></li>
                            <li class="nav-item"><a href="#emp_nextkin" data-toggle="tab" class="nav-link">Next Of Kin</a></li>
                            <li class="nav-item"><a href="#bank_statutory" data-toggle="tab" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="tab-content">
            <!-- Personal Details -->
            <div id="emp_profile" class="pro-overview tab-pane fade show active">
                <div class="row">
                    <div class="col-md-12">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (!empty($personaldetails))
                            <form action="{{ url('details-update') }}/{{$personaldetails->id}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Home Telephone No <span class="text-danger">*</span></label>
                                            <input class="form-control" value="{{  $personaldetails->home_tel_no }}" type="text" name="home_tel_no">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">DayTime Telephone No</label>
                                            <input class="form-control" value="{{  $personaldetails->day_tel_no }}" type="text" name="day_tel_no">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">National Insurance No <span class="text-danger">*</span></label>
                                            <input class="form-control" value="{{  $personaldetails->national_no }}" type="text" name="national_no">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">E-mail Address <span class="text-danger">*</span></label>
                                            <input class="form-control" value="{{  $personaldetails->email_address }}" type="email" name="email_address">
                                        </div>
                                    </div>
                                    <div class="card-body" style="display: flex; flex-direction: row">
                                        <div><p>Can we contact you at work?</p>
                                        </div>
                                        <div style="margin-left: 70px">
                                            <input type="radio" id="yes" name="ask" value="yes" {{ $personaldetails->contact_at_work == 'yes' ? 'checked' : '' }} >
                                            <label for="yes">Yes</label>
                                        </div><br>
                                        <div style="margin-left: 30px">
                                            <input type="radio" id="yes" name="ask" value="no" {{ $personaldetails->contact_at_work == 'no' ? 'checked' : '' }} >
                                            <label for="no">No</label>
                                        </div>
                                    </div>
                                    <div class="card-body" style="display: flex; flex-direction: row">
                                        <div><p>Are you free to remain and take up employment
                                            in the UK with no current migration
                                        restrictions?</p>
                                        </div>
                                        <div style="margin-left: 70px">
                                            <input type="radio" id="yes" name="ask1" value="yes" {{ $personaldetails->contact_at_work == 'yes' ? 'checked' : '' }} >
                                            <label for="yes">Yes</label>
                                        </div><br>
                                        <div style="margin-left: 30px">
                                            <input type="radio" id="yes" name="ask1" value="no" {{ $personaldetails->contact_at_work == 'no' ? 'checked' : '' }} >
                                            <label for="no">No</label>
                                        </div>
                                    </div>
                                    <div class="card-body" style="display: flex; flex-direction: row">
                                        <div><p>Are you applying on a job share basis?</p>
                                        </div>
                                        <div style="margin-left: 70px">
                                            <input type="radio" id="yes" name="ask2" value="yes" {{ $personaldetails->contact_at_work == 'yes' ? 'checked' : '' }} >
                                            <label for="yes">Yes</label>
                                        </div><br>
                                        <div style="margin-left: 30px">
                                            <input type="radio" id="yes" name="ask2" value="no" {{ $personaldetails->contact_at_work == 'no' ? 'checked' : '' }} >
                                            <label for="no">No</label>
                                        </div>
                                    </div>
                                    <div class="card-body" style="display: flex; flex-direction: row">
                                        <div><p>Do you hold a full clean driving licence valid in the UK? </p>
                                        </div>
                                        <div style="margin-left: 70px">
                                            <input type="radio" id="yes" name="ask3" value="yes" {{ $personaldetails->contact_at_work == 'yes' ? 'checked' : '' }} >
                                            <label for="yes">Yes</label>
                                        </div><br>
                                        <div style="margin-left: 30px">
                                            <input type="radio" id="yes" name="ask3" value="no" {{ $personaldetails->contact_at_work == 'no' ? 'checked' : '' }} >
                                            <label for="no">No</label>
                                        </div>
                                    </div>
                                    <div class="card-body" style="display: flex; flex-direction: row">
                                        <div><p>Does your licence inckude C1 category?</p>
                                        </div>
                                        <div style="margin-left: 70px">
                                            <input type="radio" id="yes" name="ask4" value="yes" {{ $personaldetails->contact_at_work == 'yes' ? 'checked' : '' }} >
                                            <label for="yes">Yes</label>
                                        </div><br>
                                        <div style="margin-left: 30px;">
                                            <input type="radio" id="yes" name="ask4" value="no" {{ $personaldetails->contact_at_work == 'no' ? 'checked' : '' }} >
                                            <label for="no">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section margin: 50%;">
                                    <button type="submit" class="btn btn-primary submit-btn" >Update</button>
                                </div>
                            </form>
                        @else
                            <form action="{{ url('details') }}/{{$employee->id}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Home Telephone No <span class="text-danger">*</span></label>
                                            <input class="form-control"  type="text" name="home_tel_no">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">DayTime Telephone No</label>
                                            <input class="form-control"  type="text" name="day_tel_no">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">National Insurance No <span class="text-danger">*</span></label>
                                            <input class="form-control"  type="text" name="national_no">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">E-mail Address <span class="text-danger">*</span></label>
                                            <input class="form-control"  type="email" name="email_address">
                                        </div>
                                    </div>
                                    <div class="card-body" style="display: flex; flex-direction: row">
                                            <div><p>Can we contact you at work?</p>
                                            </div>
                                            <div style="margin-left: 70px">
                                                <input type="radio" id="yes" name="ask" value="yes" >
                                                <label for="yes">Yes</label>
                                            </div><br>
                                            <div style="margin-left:30px">
                                                <input type="radio" id="no" name="ask" value="no">
                                                <label for="female">No</label>
                                            </div>
                                    </div>
                                    <div class="card-body" style="display: flex; flex-direction: row">
                                        <div><p>Are you free to remain and take up employment
                                            in the UK with no current migration
                                            restrictions?</p>
                                        </div>
                                        <div style="margin-left: 70px">
                                            <input type="radio" id="yes" name="ask1" value="yes">
                                            <label for="yes">Yes</label><br>
                                        </div>
                                        <div style="margin-left:30px">
                                            <input type="radio" id="no" name="ask1" value="no">
                                            <label for="female">No</label><br>
                                        </div>   <br>
                                    </div>
                                    <div class="card-body" style="display: flex; flex-direction: row">
                                        <div><p>Are you applying on a job share basis?</p></div>
                                        <div style="margin-left: 70px"> <input type="radio" id="yes" name="ask2" value="yes">
                                            <label for="yes">Yes</label><br>
                                        </div>
                                            <div style="margin-left:30px">
                                            <input type="radio" id="no" name="ask2" value="no">
                                            <label for="female">No</label><br>
                                        </div>
                                    </div>
                                    <div class="card-body" style="display: flex; flex-direction: row">
                                        <div><p>Do you hold a full clean driving licence valid in the UK? </p></div>
                                        <div style="margin-left: 70px"> <input type="radio" id="yes" name="ask3" value="yes">
                                            <label for="yes">Yes</label><br>
                                        </div>
                                            <div style="margin-left:30px">
                                            <input type="radio" id="no" name="ask3" value="no">
                                            <label for="female">No</label><br>
                                        </div>
                                    </div>
                                    <div class="card-body" style="display: flex; flex-direction: row">
                                        <div><p>Does your licence inckude C1 category?</p></div>
                                        <div style="margin-left: 70px"> <input type="radio" id="yes" name="ask4" value="yes">
                                            <label for="yes">Yes</label><br>
                                        </div>
                                            <div style="margin-left:30px">
                                            <input type="radio" id="no" name="ask4" value="no">
                                            <label for="female">No</label><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section margin: 50%;">
                                    <button type="submit" class="btn btn-primary submit-btn" >Save</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            <div id="schedule" class="pro-overview tab-pane fade">
                <div class="row">
                    <div class="col-md-12">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    @if (!empty($employee_schedule))
                        <div class="card profile-box flex-fill">                         
                            <form action="{{ url('employee-schedule-update')}}/{{ $employee_schedule->id }}" method="POST">
                                @csrf
                                <div class="card-body" style="display: flex; flex-direction: row">
                                    <div>
                                        <p>Start Date</p>                                                    
                                        <input type="date" class="form-control" value="{{ $employee_schedule->start_date }}" style="width: 300px; height: 40px" name='start_date'>
                                    </div>
                                    <div style="margin-left: 50px">
                                        <p>End Date</p>                                                        
                                        <input type="date" class="form-control" value="{{ $employee_schedule->end_date }}" style="width: 300px; height: 40px" name='end_date'>                                           
                                    </div>
                                </div><br>
                                <div class="card-body" style="display: flex; flex-direction: row">
                                    <div>
                                        <p>Start Time</p>                                                    
                                        <input type="time" class="form-control" value="{{ $employee_schedule->start_time }}" style="width: 300px; height: 40px" name='start_time'>
                                    </div>
                                    <div style="margin-left: 50px">
                                        <p>End Time</p>                                                        
                                        <input type="time" class="form-control" value="{{ $employee_schedule->end_time }}" style="width: 300px; height: 40px" name='end_time'>                                           
                                    </div>
                                </div><br> 
                                <div style="margin-left: 24%" class="card-body" class="center" >
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    @else
                        <div class="card profile-box flex-fill">                         
                            <form action="{{ url('employee-schedule')}}/{{ $employee->id }}" method="POST">
                                @csrf
                                <div class="card-body" style="display: flex; flex-direction: row">
                                    <div>
                                        <p>Start Date</p>                                                    
                                        <input type="date" class="form-control" style="width: 300px; height: 40px" name='start_date'>
                                    </div>
                                    <div style="margin-left: 50px">
                                        <p>End Date</p>                                                        
                                        <input type="date" class="form-control" style="width: 300px; height: 40px" name='end_date'>                                           
                                    </div>
                                </div><br>
                                <div class="card-body" style="display: flex; flex-direction: row">
                                    <div>
                                        <p>Start Time</p>                                                    
                                        <input type="time" class="form-control" style="width: 300px; height: 40px" name='start_time'>
                                    </div>
                                    <div style="margin-left: 50px">
                                        <p>End Time</p>                                                        
                                        <input type="time" class="form-control" style="width: 300px; height: 40px" name='end_time'>                                           
                                    </div>
                                </div><br> 
                                <div style="margin-left: 24%" class="card-body" class="center" >
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
            <div id="etw" class="pro-overview tab-pane fade">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                            @if (empty($employee_education))
                                <employee-education :id="{{ $employee->id }}"></employee-education>
                                <h3 class="card-title">Education<a href="#" class="edit-icon" data-toggle="modal" data-target="#employee-education-modal"><i class="fa fa-plus"></i></a></h3>
                            @else
                                <employee-education-update :employee_education="{{ $employee_education }}"></employee-education-update> 
                                <h3 class="card-title">Education<a href="#" class="edit-icon" data-toggle="modal" data-target="#employee-education-update"><i class="fa fa-pencil"></i></a></h3>
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Institution Name</div>
                                        <div class="text">{{ $employee_education->institution}}</div>
                                    </li>
                                    <li>
                                        <div class="title">Subject Name</div>
                                        <div class="text">{{ $employee_education->subject}}</div>
                                    </li>
                                    <li>
                                        <div class="title">Start Date</div>
                                        <div class="text">{{ $employee_education->start_date}}</div>
                                    </li>
                                    <li>
                                        <div class="title">End Date</div>
                                        <div class="text">{{ $employee_education->end_date}}</div>
                                    </li>
                                    <li>
                                        <div class="title">Degree</div>
                                        <div class="text">{{ $employee_education->degree}}</div>
                                    </li>
                                    <li>
                                        <div class="title">Grade</div>
                                        <div class="text">{{ $employee_education->grade}}</div>
                                    </li>
                                </ul>
                            @endif
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                
                            @if (empty($employee_present))
                                <employee-present :id="{{ $employee->id }}"></employee-present>
                                <h3 class="card-title">Present & Pervious Experience<a href="#" class="edit-icon" data-toggle="modal" data-target="#employee-present-modal"><i class="fa fa-plus"></i></a></h3>
                            @else 
                                <employee-present-update :employee_present="{{ $employee_present}}"></employee-present-update>
                                <h3 class="card-title">Present & Pervious Experience<a href="#" class="edit-icon" data-toggle="modal" data-target="#employee-present-update"><i class="fa fa-pencil"></i></a></h3>
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Company Name</div>
                                        <div class="text">{{ $employee_present->company_name }}</div>
                                    </li>
                                    <li>
                                        <div class="title">Company Location</div>
                                        <div class="text">{{$employee_present->company_address}}</div>
                                    </li>
                                    <li>
                                        <div class="title">Job Position</div>
                                        <div class="text">{{$employee_present->job_position}}</div>
                                    </li>
                                    <li>
                                        <div class="title">Period From</div>
                                        <div class="text">{{$employee_present->job_position}}</div>
                                    </li>
                                    <li>
                                        <div class="title">Period To</div>
                                        <div class="text">{{$employee_present->period_to}}</div>
                                    </li>
                                    <li>
                                        <div class="title">Current Job</div>
                                        <div class="text" >{{$employee_present->job_current  }}</div>
                                    </li>
                                </ul>
                            @endif
                            </div>
                        </div>   
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class=" card-body">
                                
                            @if (empty($employee_training))
                                <employee-training :id="{{ $employee->id }}"></employee-training>
                                <h3 class="card-title">Training & Development<a href="#" class="edit-icon" data-toggle="modal" data-target="#employee-training-modal"><i class="fa fa-plus"></i></a></h3>
                            @else 
                                <employee-training-update :employee_training="{{ $employee_training }}"></employee-training-update>
                                    <h3 class="card-title">Training & Development<a href="#" class="edit-icon" data-toggle="modal" data-target="#employee-training-update"><i class="fa fa-pencil"></i></a></h3>
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Company Name</div>
                                            <div class="text">{{ $employee_training->companies_name}}</div>
                                        </li>
                                        <li>
                                            <div class="title">Location</div>
                                            <div class="text">{{ $employee_training->company_location}}</div>
                                        </li>
                                            <li>
                                            <div class="title">Training Course</div>
                                            <div class="text">{{ $employee_training->training_course}}</div>
                                        </li><li>
                                        <li>
                                            <div class="title">Period From</div>
                                            <div class="text">{{ $employee_training->periods_from}}</div>
                                        </li><li>
                                            <div class="title">Period To</div>
                                            <div class="text">{{ $employee_training->periods_to}}</div>
                                        </li>
                                        
                                    </ul>
                                @endif
                            </div>
                        </div>   
                    </div>
                </div>
            </div>

            <!--  next of kin detail tab -->

            <div id="emp_nextkin" class="pro-overview tab-pane fade ">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Next of Kin Detail</h3>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                        @endif
                        <!--  next of kin detail tab -->

                        @if (!empty($employeeNextkin))
                        <form method="POST" action="{{ url('next-kin-update') }}/{{ $employeeNextkin->id }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">First Name <span class="text-danger"></span></label>
                                        <input class="form-control" name="first_name" type="text" value=" {{$employeeNextkin->first_name }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Second Name <span class="text-danger"></span></label>
                                        <input class="form-control" name="last_name" type="text" value="{{$employeeNextkin->last_name }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Address First Line <span class="text-danger"></span></label>
                                        <input class="form-control" name="address_first_line" type="text" value="{{ $employeeNextkin ->address_first_line}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Address Second Line <span class="text-danger"></span></label>
                                        <input class="form-control" name="address_second_line" type="text" value="{{$employeeNextkin->address_second_line}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">City <span class="text-danger"></span></label>
                                        <input class="form-control" name="city" type="text" value="{{ $employeeNextkin->city }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">County <span class="text-danger"></span></label>
                                        <input class="form-control" name="county" type="text" value="{{  $employeeNextkin->county}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Country <span class="text-danger"></span></label>
                                        <input class="form-control" name="country" type="text" value="{{ $employeeNextkin->country }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Postcode <span class="text-danger"></span></label>
                                        <input class="form-control" name="postcode" type="text" value="{{  $employeeNextkin->postcode }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Home Tel <span class="text-danger"></span></label>
                                        <input class="form-control" name="home_tel" type="text" value="{{ $employeeNextkin->home_tel }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Mobile <span class="text-danger"></span></label>
                                        <input class="form-control" name="mobile" type="text" value="{{ $employeeNextkin->mobile }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email <span class="text-danger"></span></label>
                                        <input class="form-control" name="email" type="email" value="{{ $employeeNextkin->email }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Relatioship <span class="text-danger"></span></label>
                                        <input class="form-control" name="relationship" type="text" value="{{ $employeeNextkin->relationship }}">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit">Update</button>
                            </div>
                        </form>
                        @else
                        <form method="POST" action="{{ url('next-kin') }}/{{ $employee->id }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">First Name <span class="text-danger"></span></label>
                                        <input class="form-control" name="first_name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Second Name <span class="text-danger"></span></label>
                                        <input class="form-control" name="last_name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Address First Line <span class="text-danger"></span></label>
                                        <input class="form-control" name="address_first_line" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Address Second Line <span class="text-danger"></span></label>
                                        <input class="form-control" name="address_second_line" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">City <span class="text-danger"></span></label>
                                        <input class="form-control" name="city" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">County <span class="text-danger"></span></label>
                                        <input class="form-control" name="county" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Country <span class="text-danger"></span></label>
                                        <input class="form-control" name="country" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Postcode <span class="text-danger"></span></label>
                                        <input class="form-control" name="postcode" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Home Tel <span class="text-danger"></span></label>
                                        <input class="form-control" name="home_tel" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Mobile <span class="text-danger"></span></label>
                                        <input class="form-control" name="mobile" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email <span class="text-danger"></span></label>
                                        <input class="form-control" name="email" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Relatioship <span class="text-danger"></span></label>
                                        <input class="form-control" name="relationship" type="text">
                                    </div>
                                </div>

                            </div>


                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </div>

            <!--  /next kin detail tab -->
            <!-- /Health Tab -->
            <div id="emp_health" class="pro-overview tab-pane fade">
                <div class="row">
                    <div class="col-md-12">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            {{-- @if (Session::has('alert'))
                            <div class="alert alert-success">
                                {{ Session::get('alert') }}
                            </div>
                            @endif     --}}

                    </div>
                    <div class="card profile-box flex-fill">
                        @if (!empty($employeeHealth))
                            <form action="{{ url('employee-health-update')}}/{{ $employeeHealth->id }}" method="POST">
                                @csrf

                                <div class="card-body" style="display: flex; flex-direction: row">

                                        <div>
                                            <p>Do you have a disability which  is relevant to your application?</p>
                                        </div>
                                        <div style="margin-left: 70px">
                                            <input type="radio" name="ask"  value="yes" {{ $employeeHealth->disability == 'yes' ? 'checked' : '' }}>
                                            <label for="yes">Yes</label><br>
                                        </div>
                                        <div style="margin-left:30px">
                                            <input type="radio" name="ask"  value="no" {{ $employeeHealth->disability == 'no' ? 'checked' : '' }}>
                                            <label for="no">No</label><br>
                                        </div>
                                </div>
                                <div style="justify-content: center" class="card-body">
                                        <p>If yes, please give details</p>
                                        <div>
                                            <textarea class="form-control" id="" cols="70" rows="5" placeholder="Enter Your Massage Here" name='disability_details' >{{ $employeeHealth->disability_details }}</textarea>
                                        </div>
                                </div>
                                <div class="card-body" style="display: flex; flex-direction: row">
                                    <p>Do You need to make specific arrangements in order for you to attend the interview?</p>

                                    <div style="margin-left: 50px">
                                        <input type="radio" name="what"  value="yes" {{ $employeeHealth->arrangements == 'yes' ? 'checked' : '' }}>
                                        <label for="yes">Yes</label><br>
                                     </div>
                                    <div style="margin-left:20px">
                                        <input type="radio" name="what"  value="no" {{ $employeeHealth->arrangements == 'no' ? 'checked' : '' }}>
                                        <label for="no">No</label><br>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>If Yes, Please give details</p>
                                    <div>
                                        <textarea class="form-control" id="" cols="70" rows="5" placeholder="Enter Your Massage Here" name='arrangements_details' >{{ $employeeHealth->arrangements_details }}</textarea>
                                    </div>
                                </div>
                                <div class="card-body" style="display: flex; flex-direction: row">
                                    <div>
                                        <p>Number of days sickness absent in the last 2 years</p>
                                        <input class="form-control" type="text" id="" style="width: 300px; height: 40px" name='days' value="{{ $employeeHealth->days }}">
                                    </div>
                                    <div style="margin-left: 50px">
                                        <p>Please State number of occasions in last 2 year</p>
                                        <input class="form-control" type="text" id="" style="width: 300px; height: 40px" name='state_number' value="{{ $employeeHealth->state_number }}">
                                    </div>
                                </div>
                                <div style="margin-left: 24%" class="card-body" class="center" >
                                    <button type="submit" class="btn btn-primary">Update Details</button>
                                </div>
                            </form>
                        @else
                            <form action="{{ url('employee-health')}}/{{ $employee->id }}" method="POST">
                                @csrf

                                <div class="card-body" style="display: flex; flex-direction: row">

                                        <div>
                                            <p>Do you have a disability which  is relevant to your application?</p>
                                        </div>
                                        <div style="margin-left: 70px">
                                            <input type="radio"  name="ask"  value="yes">
                                            <label for="yes">Yes</label><br>
                                        </div>
                                        <div style="margin-left:30px">
                                            <input type="radio"  name="ask"  value="no">
                                            <label for="no">No</label><br>
                                        </div>
                                </div>
                                <div style="justify-content: center" class="card-body">
                                        <p>If This, please give details</p>
                                        <div>
                                            <textarea class="form-control" id="" cols="70" rows="5" placeholder="Enter Your Massage Here" name='disability_details' ></textarea>
                                        </div>
                                </div>
                                <div class="card-body" style="display: flex; flex-direction: row">
                                    <p>Do You need to make specific arrangements in order for you to attend the interview?</p>

                                    <div style="margin-left: 50px">
                                        <input type="radio"  name="what"  value="yes">
                                        <label for="yes">Yes</label><br>
                                    </div>
                                    <div style="margin-left:20px">
                                        <input type="radio"  name="what"  value="no">
                                        <label for="no">No</label><br>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>If yes, please give details</p>
                                    <div>
                                        <textarea class="form-control" id="" cols="70" rows="5" placeholder="Enter Your Massage Here" name='arrangements_details' ></textarea>
                                    </div>
                                </div>
                                <div class="card-body" style="display: flex; flex-direction: row">
                                    <div>
                                        <p>Number of days sickness absent in the last 2 years</p>
                                        <input class="form-control" type="text" id="" style="width: 300px; height: 40px" name='days'>
                                    </div>
                                    <div style="margin-left: 50px">
                                        <p>Please State number of occasions in last 2 year</p>
                                        <input class="form-control" type="text" id="" style="width: 300px; height: 40px" name='state_number'>
                                    </div>
                                </div>
                                <div style="margin-left: 24%" class="card-body" class="center" >
                                    <button type="submit" class="btn btn-primary">Save Details</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            <div id="bank_details" class="pro-overview tab-pane fade">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <bank-details :id="{{ $employee->id }}"></bank-details>
                                <h3 class="card-title">Account Details<a href="#" class="edit-icon" data-toggle="modal" data-target="#bank-details-modal"><i class="fa fa-pencil"></i></a></h3>
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Account Name</div>
                                        <div class="text">HBL Bank</div>
                                    </li>
                                    <li>
                                        <div class="title">Sort Code</div>
                                        <div class="text">11-33-44</div>
                                    </li>
                                    <li>
                                        <div class="title">Account Number</div>
                                        <div class="text"><a href="">9876543210</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Education Info Tab -->
            <div id="etw" class="pro-overview tab-pane fade">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <employee-education :id="{{ $employee->id }}"></employee-education>
                                <h3 class="card-title">Education<a href="#" class="edit-icon" data-toggle="modal" data-target="#employee-education-modal"><i class="fa fa-pencil"></i></a></h3>
                                <!-- <ul class="personal-info">
                                    <li>
                                        <div class="title">Account Name</div>
                                        <div class="text">HBL Bank</div>
                                    </li>
                                    <li>
                                        <div class="title">Sort Code</div>
                                        <div class="text">11-33-44</div>
                                    </li>
                                    <li>
                                        <div class="title">Account Number</div>
                                        <div class="text"><a href="">9876543210</a></div>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <employee-present :id="{{ $employee->id }}"></employee-present>
                                <h3 class="card-title">Present & Pervious Experience<a href="#" class="edit-icon" data-toggle="modal" data-target="#employee-present-modal"><i class="fa fa-pencil"></i></a></h3>
                                <!-- <ul class="personal-info">
                                    <li>
                                        <div class="title">Account Name</div>
                                        <div class="text">HBL Bank</div>
                                    </li>
                                    <li>
                                        <div class="title">Sort Code</div>
                                        <div class="text">11-33-44</div>
                                    </li>
                                    <li>
                                        <div class="title">Account Number</div>
                                        <div class="text"><a href="">9876543210</a></div>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <employee-present :id="{{ $employee->id }}"></employee-present>
                                <h3 class="card-title">Present & Pervious Experience<a href="#" class="edit-icon" data-toggle="modal" data-target="#employee-present-modal"><i class="fa fa-pencil"></i></a></h3>
                                <!-- <ul class="personal-info">
                                    <li>
                                        <div class="title">Account Name</div>
                                        <div class="text">HBL Bank</div>
                                    </li>
                                    <li>
                                        <div class="title">Sort Code</div>
                                        <div class="text">11-33-44</div>
                                    </li>
                                    <li>
                                        <div class="title">Account Number</div>
                                        <div class="text"><a href="">9876543210</a></div>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</div>
<!-- /Page Wrapper -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.multi').selectpicker();
    });
    var base_url = "{{ url('/').'/' }}"; 
</script>
<script src="{{ asset('js/employee_details.js') }}"></script>
@endsection
