@extends('layouts.main')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper" id="client">
                
        <!-- Page Content -->
        <div class="content container-fluid">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Clients</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Clients</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <add-client></add-client>
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add-client"><i class="fa fa-plus"></i> Add Client</a>
                        <div class="view-icons">
                            <a href="client" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                            <a href="clients-list" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            
            <view-clients></view-clients>
        </div>
        <!-- /Page Content -->
        
        
        <!-- Delete Employee Modal -->
        <div class="modal custom-modal fade" id="delete_employee" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Employee</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Employee Modal -->
        
    </div>
    <!-- /Page Wrapper -->
        
	<script type="text/javascript">
		var base_url = "{{ url('/').'/' }}"; 
	</script>
	<script src="{{ asset('js/client.js') }}"></script>
@endsection