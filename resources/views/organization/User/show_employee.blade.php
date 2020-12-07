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
                    @if (Session::has('alert'))
                    <div class="alert alert-success">
                        {{ Session::get('alert') }}
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
                            <li class="nav-item"><a href="#bank_statutory" data-toggle="tab" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="tab-content">
            <!-- Profile Info Tab -->
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
                        @if (Session::has('alert'))
                        <div class="alert alert-success">
                            {{ Session::get('alert') }}
                        </div>
                        @endif
                        <form action="{{ url('details') }}/{{$employee->id}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Home Telephone No <span class="text-danger">*</span></label>
                                        <input class="form-control" value="" type="text" name="home_tel_no">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">DayTime Telephone No</label>
                                        <input class="form-control" value="" type="text" name="day_tel_no">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">National Insurance No <span class="text-danger">*</span></label>
                                        <input class="form-control" value="" type="text" name="national_no">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">E-mail Address <span class="text-danger">*</span></label>
                                        <input class="form-control" value="" type="email" name="email_address">
                                    </div>
                                </div>
                                
                                <div class="card-body" style="display: flex; flex-direction: row">
                                        <div><p>Can we contact you at work?</p>
                                        </div>
                                        <div style="margin-left: 70px"> 
                                        <input type="radio" id="yes" name="ask" value="yes">
                                        <label for="yes">Yes</label> 
                                        </div>
                                        <div style="margin-left:30px">
                                        <input type="radio" id="no" name="ask" value="no">
                                        <label for="female">No</label>
                                        </div>                                                     
                                </div>
                                
                                <div class="card-body" style="display: flex; flex-direction: row">
                                    <div><p>Are you free to remain and take up employment 
                                        in the UK with no current migration 
                                    restrictions?</p></div>
                                    <div style="margin-left: 70px"> <input type="radio" id="yes" name="ask1" value="yes">
                                        <label for="yes">Yes</label><br> </div>
                                        <div style="margin-left:30px">
                                        <input type="radio" id="no" name="ask1" value="no">
                                        <label for="female">No</label><br>
                                    </div>   <br>                                                    
                                </div>
                                <div class="card-body" style="display: flex; flex-direction: row">
                                    <div><p>Are you applying on a job share basis?</p></div>
                                    <div style="margin-left: 70px"> <input type="radio" id="yes" name="ask2" value="yes">
                                        <label for="yes">Yes</label><br> </div>
                                        <div style="margin-left:30px">
                                        <input type="radio" id="no" name="ask2" value="no">
                                        <label for="female">No</label><br>
                                    </div>                                                       
                                </div>
                                <div class="card-body" style="display: flex; flex-direction: row">
                                    <div><p>Do you hold a full clean driving licence valid in the UK? </p></div>
                                    <div style="margin-left: 70px"> <input type="radio" id="yes" name="ask3" value="yes">
                                        <label for="yes">Yes</label><br> </div>
                                        <div style="margin-left:30px">
                                        <input type="radio" id="no" name="ask3" value="no">
                                        <label for="female">No</label><br>
                                    </div>                                                       
                                </div>
                                <div class="card-body" style="display: flex; flex-direction: row">
                                    <div><p>Does your licence inckude C1 category?</p></div>
                                    <div style="margin-left: 70px"> <input type="radio" id="yes" name="ask4" value="yes">
                                        <label for="yes">Yes</label><br> </div>
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
                    </div>
                </div>
            </div>
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
                            @if (Session::has('alert'))
                            <div class="alert alert-success">
                                {{ Session::get('alert') }}
                            </div>
                            @endif    
                    </div>                                                                   
                    <div class="card profile-box flex-fill">                         
                        <form action="{{ url('employee-health')}}/{{ $employee->id }}" method="POST">
                                @csrf
                            <div class="card-body" style="display: flex; flex-direction: row">
                                
                                    <div><p>Do you have a disability which  is relevant to your application?</p></div>
                                    <div style="margin-left: 70px"> 
                                        <input type="radio" id="yes" name="ask" value="yes">
                                        <label for="yes">Yes</label><br> </div>
                                    <div style="margin-left:30px">
                                        <input type="radio" id="no" name="ask" value="no" name="ask">
                                        <label for="no">No</label><br>
                                    </div>                                                       
                            </div>
                            <div style="justify-content: center" class="card-body">
                                    <p>If This, please give details</p>
                                    <div>
                                        <textarea id="" cols="70" rows="5" placeholder="Enter Your Massage Here" name='disability_details' ></textarea>
                                    </div>
                            </div>
                            <div class="card-body" style="display: flex; flex-direction: row">
                                <p>Do You need to make specific arrangements in order for you to attend the interview?</p>

                                <div style="margin-left: 50px">
                                    <input type="radio" id="yes" name="what" value="yes">
                                    <label for="yes">Yes</label><br> </div>
                                <div style="margin-left:20px">
                                    <input type="radio" id="no" name="what" value="no">
                                    <label for="no">No</label><br>
                                </div>                                           
                            </div>
                            <div class="card-body">
                                <div>
                                    <textarea id="" cols="70" rows="5" placeholder="Enter Your Massage Here" name='arrangements_details'></textarea>
                                </div>
                            </div>
                            <div class="card-body" style="display: flex; flex-direction: row">
                                <div>
                                    <p>Number of days sickness absent in the last 2 years</p>                                                    
                                    <input type="text" id="" style="width: 300px; height: 40px" name='days'>
                                </div>
                                <div style="margin-left: 50px">
                                    <p>Please State number of occasions in last 2 year</p>                                                        
                                    <input type="text" id="" style="width: 300px; height: 40px" name='state_number'>                                           
                                </div>
                            </div><br> 
                            <div style="margin-left: 24%" class="card-body" class="center" >
                                <button type="submit" class="btn btn-primary">Update Details</button>
                            </div>
                        </form>
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
        <!-- /Page Content -->
        
        <!-- Profile Modal -->
        <div id="profile_info" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Profile Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="profile-img-wrap edit-img">
                                        <img class="inline-block" src="img/profiles/avatar-02.jpg" alt="user">
                                        <div class="fileupload btn">
                                            <span class="btn-text">edit</span>
                                            <input class="upload" type="file">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" value="John">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" value="Doe">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Birth Date</label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="text" value="05/06/1985">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="select form-control">
                                                    <option value="male selected">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" value="4487 Snowbird Lane">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control" value="New York">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" value="United States">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pin Code</label>
                                        <input type="text" class="form-control" value="10523">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" value="631-889-3206">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Department <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select Department</option>
                                            <option>Web Development</option>
                                            <option>IT Management</option>
                                            <option>Marketing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Designation <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select Designation</option>
                                            <option>Web Designer</option>
                                            <option>Web Developer</option>
                                            <option>Android Developer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reports To <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>-</option>
                                            <option>Wilmer Deluna</option>
                                            <option>Lesley Grauer</option>
                                            <option>Jeffery Lalor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Profile Modal -->
        
        <!-- Personal Info Modal -->
        <div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Personal Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Passport No</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Passport Expiry Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tel</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nationality <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Religion</label>
                                        <div class="cal-icon">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Marital status <span class="text-danger">*</span></label>
                                        <select class="select form-control">
                                            <option>-</option>
                                            <option>Single</option>
                                            <option>Married</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employment of spouse</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No. of children </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Personal Info Modal -->
        
        <!-- Family Info Modal -->
        <div id="family_info_modal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Family Informations</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-scroll">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Family Member <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Relationship <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Date of birth <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Relationship <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Date of birth <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-more">
                                            <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Family Info Modal -->
        
        <!-- Emergency Contact Modal -->
        <div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Personal Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Primary Contact</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Relationship <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone 2</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Primary Contact</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Relationship <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone 2</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Emergency Contact Modal -->
        
        <!-- Education Modal -->
        <div id="education_info" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Education Informations</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-scroll">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-focus focused">
                                                    <input type="text" value="Oxford University" class="form-control floating">
                                                    <label class="focus-label">Institution</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus focused">
                                                    <input type="text" value="Computer Science" class="form-control floating">
                                                    <label class="focus-label">Subject</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus focused">
                                                    <div class="cal-icon">
                                                        <input type="text" value="01/06/2002" class="form-control floating datetimepicker">
                                                    </div>
                                                    <label class="focus-label">Starting Date</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus focused">
                                                    <div class="cal-icon">
                                                        <input type="text" value="31/05/2006" class="form-control floating datetimepicker">
                                                    </div>
                                                    <label class="focus-label">Complete Date</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus focused">
                                                    <input type="text" value="BE Computer Science" class="form-control floating">
                                                    <label class="focus-label">Degree</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus focused">
                                                    <input type="text" value="Grade A" class="form-control floating">
                                                    <label class="focus-label">Grade</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-focus focused">
                                                    <input type="text" value="Oxford University" class="form-control floating">
                                                    <label class="focus-label">Institution</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus focused">
                                                    <input type="text" value="Computer Science" class="form-control floating">
                                                    <label class="focus-label">Subject</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus focused">
                                                    <div class="cal-icon">
                                                        <input type="text" value="01/06/2002" class="form-control floating datetimepicker">
                                                    </div>
                                                    <label class="focus-label">Starting Date</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus focused">
                                                    <div class="cal-icon">
                                                        <input type="text" value="31/05/2006" class="form-control floating datetimepicker">
                                                    </div>
                                                    <label class="focus-label">Complete Date</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus focused">
                                                    <input type="text" value="BE Computer Science" class="form-control floating">
                                                    <label class="focus-label">Degree</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus focused">
                                                    <input type="text" value="Grade A" class="form-control floating">
                                                    <label class="focus-label">Grade</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-more">
                                            <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Education Modal -->
        
        <!-- Experience Modal -->
        <div id="experience_info" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Experience Informations</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-scroll">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating" value="Digital Devlopment Inc">
                                                    <label class="focus-label">Company Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating" value="United States">
                                                    <label class="focus-label">Location</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating" value="Web Developer">
                                                    <label class="focus-label">Job Position</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus">
                                                    <div class="cal-icon">
                                                        <input type="text" class="form-control floating datetimepicker" value="01/07/2007">
                                                    </div>
                                                    <label class="focus-label">Period From</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus">
                                                    <div class="cal-icon">
                                                        <input type="text" class="form-control floating datetimepicker" value="08/06/2018">
                                                    </div>
                                                    <label class="focus-label">Period To</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating" value="Digital Devlopment Inc">
                                                    <label class="focus-label">Company Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating" value="United States">
                                                    <label class="focus-label">Location</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus">
                                                    <input type="text" class="form-control floating" value="Web Developer">
                                                    <label class="focus-label">Job Position</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus">
                                                    <div class="cal-icon">
                                                        <input type="text" class="form-control floating datetimepicker" value="01/07/2007">
                                                    </div>
                                                    <label class="focus-label">Period From</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-focus">
                                                    <div class="cal-icon">
                                                        <input type="text" class="form-control floating datetimepicker" value="08/06/2018">
                                                    </div>
                                                    <label class="focus-label">Period To</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-more">
                                            <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /Page Wrapper -->
    <script type="text/javascript">
        var base_url = "{{ url('/').'/' }}"; 
    </script>
    <script src="{{ url('js/employee_details.js') }}"></script>
@endsection