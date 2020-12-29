@extends('layouts.main')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper" id="employee">
                
        <!-- Page Content -->
        <div class="content container-fluid">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Employee</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Employee</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <add-employee></add-employee>
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add-employee"><i class="fa fa-plus"></i> Add Employee</a>
                        <div class="view-icons">
                            <a href="employees" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                            <a href="employees-list" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            
            <view-employees></view-employees>
        </div>
        <!-- /Page Content -->
        
    </div>
    <!-- /Page Wrapper -->
        
	<script type="text/javascript">
		var base_url = "{{ url('/').'/' }}"; 
	</script>
	<script src="{{ asset('js/employee.js') }}"></script>
@endsection