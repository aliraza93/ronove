@extends('layouts.main')

@section('content')
	
	<!-- Page Wrapper -->
	<div class="page-wrapper" id="organization">
		<!-- Page Content -->
		<div class="content container-fluid">
			<!-- Page Header -->
			<div class="page-header">
				<div class="row align-items-center">
					<div class="col">
						<h3 class="page-title">Organizations</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
							<li class="breadcrumb-item active">Organizations</li>
						</ul>
					</div>
					<add-organization></add-organization>
					<div class="col-auto float-right ml-auto">
						<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add-organization"><i class="fa fa-plus"></i> Add Organization</a>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
			<div class="row">
				<view-organizations></view-organizations>
			</div>
		
		</div>
		<!-- /Page Content -->

	</div>
	<!-- /Page Wrapper -->
	<script type="text/javascript">
		var base_url = "{{ url('/').'/' }}"; 
	</script>
	<script src="{{ asset('js/organization.js') }}"></script>
@endsection