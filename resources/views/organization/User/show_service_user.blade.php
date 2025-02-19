@extends('layouts.main')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper" id="mar-sheet">
			
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
                                <form id="update-service_user-image" action="{{ route('service_user.avatar', $service_user->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div onclick="document.getElementById('image').click()">
                                        <div class="profile-img user-avatar">
                                            <a href="#">
                                                <img src="{{ !empty($service_user->image()) ? url($service_user->image()) : asset('img/profiles/avatar-02.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <input onchange="document.getElementById('update-service_user-image').submit()" style="display: none;"  id="image" type="file" name="image">
                                </form>
                            </div>
                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile-info-left">
                                            <h3 class="user-name m-t-0 mb-0">{{ !empty($service_user) ?  $service_user->first_name : '' }} {{ !empty($service_user) ? $service_user->last_name : '' }} </h3>
                                            <h6 class="text-muted">UI/UX Design Team</h6>
                                            <small class="text-muted">Web Designer</small>
                                            <div class="staff-id">ID : {{ $service_user->id }}</div>
                                            <div class="small doj text-muted">Date of Join : {{ $service_user->created_at }}</div>
                                            <div class="staff-msg"><a class="btn btn-custom" href="chat">Send Message</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Phone:</div>
                                                <div class="text"><a href="">{{ $service_user->phone }}</a></div>
                                            </li>
                                            <li>
                                                <div class="title">Email:</div>
                                                <div class="text"><a href="">{{ $service_user->email }}</a></div>
                                            </li>
                                            <li>
                                                <div class="title">Birthday:</div>
                                                <div class="text">24th July</div>
                                            </li>
                                            <li>
                                                <div class="title">Address:</div>
                                                <div class="text">{{ $service_user->address }}</div>
                                            </li>
                                            <li>
                                                <div class="title">Gender:</div>
                                                <div class="text">{{ $service_user->gender }}</div>
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
        </div>
        <div class="card tab-box">
            <div class="row user-tabs">
                <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                    <ul class="nav nav-tabs nav-tabs-bottom">
                        <li class="nav-item"><a href="#emp_profile" data-toggle="tab" class="nav-link active">Profile</a></li>
                        <li class="nav-item"><a href="#mar_sheet" data-toggle="tab" class="nav-link">MAR Sheet</a></li>
                        <li class="nav-item"><a href="#emp_projects" data-toggle="tab" class="nav-link">Projects</a></li>
                        <li class="nav-item"><a href="#book-service-staff" data-toggle="tab" class="nav-link">Book Service Staff</a></li>
                        <li class="nav-item"><a href="#bank_statutory" data-toggle="tab" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>
                        <li class="nav-item"><a href="#care_plan" data-toggle="tab" class="nav-link">Care Plan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="tab-content">
        
            <!-- Profile Info Tab -->
            <div id="emp_profile" class="pro-overview tab-pane fade show active">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Personal Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#personal_info_modal"><i class="fa fa-pencil"></i></a></h3>
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Passport No.</div>
                                        <div class="text">9876543210</div>
                                    </li>
                                    <li>
                                        <div class="title">Passport Exp Date.</div>
                                        <div class="text">9876543210</div>
                                    </li>
                                    <li>
                                        <div class="title">Tel</div>
                                        <div class="text"><a href="">9876543210</a></div>
                                    </li>
                                    <li>
                                        <div class="title">Nationality</div>
                                        <div class="text">Indian</div>
                                    </li>
                                    <li>
                                        <div class="title">Religion</div>
                                        <div class="text">Christian</div>
                                    </li>
                                    <li>
                                        <div class="title">Marital status</div>
                                        <div class="text">Married</div>
                                    </li>
                                    <li>
                                        <div class="title">Employment of spouse</div>
                                        <div class="text">No</div>
                                    </li>
                                    <li>
                                        <div class="title">No. of children</div>
                                        <div class="text">2</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Emergency Contact <a href="#" class="edit-icon" data-toggle="modal" data-target="#emergency_contact_modal"><i class="fa fa-pencil"></i></a></h3>
                                <h5 class="section-title">Primary</h5>
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Name</div>
                                        <div class="text">John Doe</div>
                                    </li>
                                    <li>
                                        <div class="title">Relationship</div>
                                        <div class="text">Father</div>
                                    </li>
                                    <li>
                                        <div class="title">Phone </div>
                                        <div class="text">9876543210, 9876543210</div>
                                    </li>
                                </ul>
                                <hr>
                                <h5 class="section-title">Secondary</h5>
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Name</div>
                                        <div class="text">Karen Wills</div>
                                    </li>
                                    <li>
                                        <div class="title">Relationship</div>
                                        <div class="text">Brother</div>
                                    </li>
                                    <li>
                                        <div class="title">Phone </div>
                                        <div class="text">9876543210, 9876543210</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Bank information</h3>
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Bank name</div>
                                        <div class="text">ICICI Bank</div>
                                    </li>
                                    <li>
                                        <div class="title">Bank account No.</div>
                                        <div class="text">159843014641</div>
                                    </li>
                                    <li>
                                        <div class="title">IFSC Code</div>
                                        <div class="text">ICI24504</div>
                                    </li>
                                    <li>
                                        <div class="title">PAN No</div>
                                        <div class="text">TC000Y56</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Family Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#family_info_modal"><i class="fa fa-pencil"></i></a></h3>
                                <div class="table-responsive">
                                    <table class="table table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Relationship</th>
                                                <th>Date of Birth</th>
                                                <th>Phone</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Leo</td>
                                                <td>Brother</td>
                                                <td>Feb 16th, 2019</td>
                                                <td>9876543210</td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                            <a href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Education Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#education_info"><i class="fa fa-pencil"></i></a></h3>
                                <div class="experience-box">
                                    <ul class="experience-list">
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="#/" class="name">International College of Arts and Science (UG)</a>
                                                    <div>Bsc Computer Science</div>
                                                    <span class="time">2000 - 2003</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="#/" class="name">International College of Arts and Science (PG)</a>
                                                    <div>Msc Computer Science</div>
                                                    <span class="time">2000 - 2003</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Experience <a href="#" class="edit-icon" data-toggle="modal" data-target="#experience_info"><i class="fa fa-pencil"></i></a></h3>
                                <div class="experience-box">
                                    <ul class="experience-list">
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="#/" class="name">Web Designer at Zen Corporation</a>
                                                    <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="#/" class="name">Web Designer at Ron-tech</a>
                                                    <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="#/" class="name">Web Designer at Dalt Technology</a>
                                                    <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Profile Info Tab -->

            <!-- Profile Info Tab -->
            <div id="mar_sheet" class="pro-overview tab-pane fade">
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <div class="row-fluid d-flex">
                                    <div class="col-md-6">
                                        <add-mar-sheet :user="{{ $service_user }}"></add-mar-sheet>
                                        <h3 class="card-title">Add MAR Sheet</h3>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-mar-sheet">
                                            <i class="fa fa-plus"></i> Add MAR Sheet
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    @php
                                        $time = '';
                                        $days= '';
                                    @endphp
                                    @foreach ($mar_sheets as $mar)
                                        @php
                                            $data = unserialize($mar->time);
                                            $time = implode(', ', $data);
                                            $data2 = unserialize($mar->days);
                                            $days = implode(', ', $data2);
                                        @endphp
                                    @endforeach
                                    <view-mar-sheet :mars="{{ $mar_sheets }}" time="{{ $time }}" days="{{ $days }}"></view-mar-sheet>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Profile Info Tab -->

            <!-- Profile Info Tab -->
            <div id="book-service-staff" class="pro-overview tab-pane fade">
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <div class="row">
                                    <book-staff :service_user="{{ $service_user }}"></book-staff>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Profile Info Tab -->
            
            <!-- Projects Tab -->
            <div class="tab-pane fade" id="emp_projects">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown profile-action">
                                    <a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="project-title"><a href="project-view">Office Management</a></h4>
                                <small class="block text-ellipsis m-b-15">
                                    <span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
                                    <span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
                                </small>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. When an unknown printer took a galley of type and
                                    scrambled it...
                                </p>
                                <div class="pro-deadline m-b-15">
                                    <div class="sub-title">
                                        Deadline:
                                    </div>
                                    <div class="text-muted">
                                        17 Apr 2019
                                    </div>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Project Leader :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="img/profiles/avatar-16.jpg"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Team :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="img/profiles/avatar-02.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="img/profiles/avatar-09.jpg"></a></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="img/profiles/avatar-10.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="img/profiles/avatar-05.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="all-users">+15</a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
                                <div class="progress progress-xs mb-0">
                                    <div style="width: 40%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown profile-action">
                                    <a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="project-title"><a href="project-view">Project Management</a></h4>
                                <small class="block text-ellipsis m-b-15">
                                    <span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
                                    <span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
                                </small>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. When an unknown printer took a galley of type and
                                    scrambled it...
                                </p>
                                <div class="pro-deadline m-b-15">
                                    <div class="sub-title">
                                        Deadline:
                                    </div>
                                    <div class="text-muted">
                                        17 Apr 2019
                                    </div>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Project Leader :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="img/profiles/avatar-16.jpg"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Team :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="img/profiles/avatar-02.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="img/profiles/avatar-09.jpg"></a></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="img/profiles/avatar-10.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="img/profiles/avatar-05.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="all-users">+15</a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
                                <div class="progress progress-xs mb-0">
                                    <div style="width: 40%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown profile-action">
                                    <a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="project-title"><a href="project-view">Video Calling App</a></h4>
                                <small class="block text-ellipsis m-b-15">
                                    <span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
                                    <span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
                                </small>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. When an unknown printer took a galley of type and
                                    scrambled it...
                                </p>
                                <div class="pro-deadline m-b-15">
                                    <div class="sub-title">
                                        Deadline:
                                    </div>
                                    <div class="text-muted">
                                        17 Apr 2019
                                    </div>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Project Leader :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="img/profiles/avatar-16.jpg"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Team :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="img/profiles/avatar-02.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="img/profiles/avatar-09.jpg"></a></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="img/profiles/avatar-10.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="img/profiles/avatar-05.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="all-users">+15</a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
                                <div class="progress progress-xs mb-0">
                                    <div style="width: 40%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown profile-action">
                                    <a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="project-title"><a href="project-view">Hospital Administration</a></h4>
                                <small class="block text-ellipsis m-b-15">
                                    <span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
                                    <span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
                                </small>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. When an unknown printer took a galley of type and
                                    scrambled it...
                                </p>
                                <div class="pro-deadline m-b-15">
                                    <div class="sub-title">
                                        Deadline:
                                    </div>
                                    <div class="text-muted">
                                        17 Apr 2019
                                    </div>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Project Leader :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="img/profiles/avatar-16.jpg"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Team :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="img/profiles/avatar-02.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="img/profiles/avatar-09.jpg"></a></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="img/profiles/avatar-10.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="img/profiles/avatar-05.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="all-users">+15</a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
                                <div class="progress progress-xs mb-0">
                                    <div style="width: 40%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Projects Tab -->
            
            <!-- Bank Statutory Tab -->
            <div class="tab-pane fade" id="bank_statutory">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"> Basic Salary Information</h3>
                        <form>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select salary basis type</option>
                                            <option>Hourly</option>
                                            <option>Daily</option>
                                            <option>Weekly</option>
                                            <option>Monthly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Salary amount <small class="text-muted">per month</small></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Type your salary amount" value="0.00">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Payment type</label>
                                        <select class="select">
                                            <option>Select payment type</option>
                                            <option>Bank transfer</option>
                                            <option>Check</option>
                                            <option>Cash</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h3 class="card-title"> PF Information</h3>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">PF contribution</label>
                                        <select class="select">
                                            <option>Select PF contribution</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">PF No. <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select PF contribution</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee PF rate</label>
                                        <select class="select">
                                            <option>Select PF contribution</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select additional rate</option>
                                            <option>0%</option>
                                            <option>1%</option>
                                            <option>2%</option>
                                            <option>3%</option>
                                            <option>4%</option>
                                            <option>5%</option>
                                            <option>6%</option>
                                            <option>7%</option>
                                            <option>8%</option>
                                            <option>9%</option>
                                            <option>10%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Total rate</label>
                                        <input type="text" class="form-control" placeholder="N/A" value="11%">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee PF rate</label>
                                        <select class="select">
                                            <option>Select PF contribution</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select additional rate</option>
                                            <option>0%</option>
                                            <option>1%</option>
                                            <option>2%</option>
                                            <option>3%</option>
                                            <option>4%</option>
                                            <option>5%</option>
                                            <option>6%</option>
                                            <option>7%</option>
                                            <option>8%</option>
                                            <option>9%</option>
                                            <option>10%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Total rate</label>
                                        <input type="text" class="form-control" placeholder="N/A" value="11%">
                                    </div>
                                </div>
                            </div>
                            
                            <hr>
                            <h3 class="card-title"> ESI Information</h3>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">ESI contribution</label>
                                        <select class="select">
                                            <option>Select ESI contribution</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">ESI No. <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select ESI contribution</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee ESI rate</label>
                                        <select class="select">
                                            <option>Select ESI contribution</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select additional rate</option>
                                            <option>0%</option>
                                            <option>1%</option>
                                            <option>2%</option>
                                            <option>3%</option>
                                            <option>4%</option>
                                            <option>5%</option>
                                            <option>6%</option>
                                            <option>7%</option>
                                            <option>8%</option>
                                            <option>9%</option>
                                            <option>10%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Total rate</label>
                                        <input type="text" class="form-control" placeholder="N/A" value="11%">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Bank Statutory Tab -->
            
            <!-- Care Plan -->
            <div id="care_plan" class="pro-overview tab-pane fade" id=$care-plan>     

                        <h3 class="card-title"><b>Care Plan</b></h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        
                        @endif

                        @if (!empty($serviceCarePlan))
                        <form method="POST" action="{{ url('care-plan-update')}}/{{$serviceCarePlan->id}}">
                            @csrf
                            <h3>Basic Salary Information</h3>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Salary basics <span class="text-danger">*</span></label>
                                        <input class="form-control" name="Salary_basic" type="text" value=" {{$serviceCarePlan->Salary_basic }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Salary Amount par month <span class="text-danger"></span></label>
                                        <input class="form-control" name="salary_amount" type="text" value=" {{$serviceCarePlan->salary_amount }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Payment Type <span class="text-danger"></span></label>
                                        <input class="form-control" name="payment_type" type="text" value=" {{$serviceCarePlan->payment_type }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label"><h3>PF Information</h3> <span class="text-danger"></span></label> 
                                    </div>
                                </div>    
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">PF contribution <span class="text-danger"></span></label>
                                        <input class="form-control" name="pf_cuntribution" type="text" value=" {{$serviceCarePlan->pf_cuntribution }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">PF No: <span class="text-danger">*</span></label>
                                        <input class="form-control" name="pf_no" type="text" value=" {{$serviceCarePlan->pf_no }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">     
                                </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee PF Rate <span class="text-danger"></span></label>
                                        <input class="form-control" name="emp_pf_rate" type="text" value=" {{$serviceCarePlan->emp_pf_rate }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Additional Rate <span class="text-danger">*</span></label>
                                        <input class="form-control" name="additional_rate" type="text" value=" {{$serviceCarePlan->additional_rate }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Totel Rate<span class="text-danger"></span></label>
                                        <input class="form-control" name="total_rate" type="text" value=" {{$serviceCarePlan->total_rate }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee Pf Rate <span class="text-danger"></span></label>
                                        <input class="form-control" name="emp_pf_rate2" type="text" value=" {{$serviceCarePlan->emp_pf_rate2 }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Additional Rate  <span class="text-danger"></span></label>
                                        <input class="form-control" name="additional_rate2" type="text" value=" {{$serviceCarePlan->additional_rate2 }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Totel Rate <span class="text-danger"></span></label>
                                        <input class="form-control" name="total_rate2" type="text" value=" {{$serviceCarePlan->total_rate2 }}">
                                    </div>
                                </div>                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label"><h3>ESI Information</h3> <span class="text-danger"></span></label> 
                                    </div>
                                </div> 
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">ESI contribution <span class="text-danger"></span></label>
                                        <input class="form-control" name="esi_contribution" type="text" value=" {{$serviceCarePlan->esi_contribution }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">ESI No: <span class="text-danger">*</span></label>
                                        <input class="form-control" name="esi_no" type="text" value=" {{$serviceCarePlan->esi_no }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group"> 
                                    </div>  
                                   </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee ESI Rate <span class="text-danger"></span></label>
                                        <input class="form-control" name="em_esi_rate" type="text" value=" {{$serviceCarePlan->em_esi_rate }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                        <input class="form-control" name="additional_esi_rate" type="text" value=" {{$serviceCarePlan->additional_esi_rate }}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Totel rate  <span class="text-danger"></span></label>
                                        <input class="form-control" name="total_esi_rate" type="text" value=" {{$serviceCarePlan->total_esi_rate }}">
                                    </div>
                                </div>

                            </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn" type="submit">Update</button>
                                </div>
                        </form>
                        @else
                        <form method="POST" action="{{ url('care-plan')}}/{{$service_user->id}}">
                            @csrf
                            <h3>Basic Salary Information</h3>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Salary basics <span class="text-danger">*</span></label>
                                        <input class="form-control" name="Salary_basic" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Salary Amount par month <span class="text-danger"></span></label>
                                        <input class="form-control" name="salary_amount" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Payment Type <span class="text-danger"></span></label>
                                        <input class="form-control" name="payment_type" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label"><h3>PF Information</h3> <span class="text-danger"></span></label> 
                                    </div>
                                </div>    
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">PF contribution <span class="text-danger"></span></label>
                                        <input class="form-control" name="pf_cuntribution" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">PF No: <span class="text-danger">*</span></label>
                                        <input class="form-control" name="pf_no" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">     
                                </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee PF Rate <span class="text-danger"></span></label>
                                        <input class="form-control" name="emp_pf_rate" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Additional Rate <span class="text-danger">*</span></label>
                                        <input class="form-control" name="additional_rate" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Totel Rate<span class="text-danger"></span></label>
                                        <input class="form-control" name="total_rate" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee Pf Rate <span class="text-danger"></span></label>
                                        <input class="form-control" name="emp_pf_rate2" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Additional Rate  <span class="text-danger"></span></label>
                                        <input class="form-control" name="additional_rate2" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Totel Rate <span class="text-danger"></span></label>
                                        <input class="form-control" name="total_rate2" type="text">
                                    </div>
                                </div>                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label"><h3>ESI Information</h3> <span class="text-danger"></span></label> 
                                    </div>
                                </div> 
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">ESI contribution <span class="text-danger"></span></label>
                                        <input class="form-control" name="esi_contribution" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">ESI No: <span class="text-danger">*</span></label>
                                        <input class="form-control" name="esi_no" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group"> </div>    
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee ESI Rate <span class="text-danger"></span></label>
                                        <input class="form-control" name="em_esi_rate" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                        <input class="form-control" name="additional_esi_rate" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Totel rate  <span class="text-danger"></span></label>
                                        <input class="form-control" name="total_esi_rate" type="text">
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
            <!-- /Care Plan -->

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
<script src="{{ asset('js/mar_sheet.js') }}"></script>
@endsection