@extends('layouts.main')

@section('content')

	<!-- Page Wrapper -->
	<div class="page-wrapper" id="booking">
		<!-- Page Content -->
		<div class="content container-fluid">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
					<h2 class="m-0 text-dark">Bookings</h2>
					</div><!-- /.col -->
					<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
						<li class="breadcrumb-item active">Bookings</li>
					</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content container-fluid">
				<div class="row">
					<view-bookings></view-bookings>
				</div>
			</div>
		
		</div>
		<!-- /Page Content -->

	</div>
	<!-- /Page Wrapper -->
	<script type="text/javascript">
		var base_url = "{{ url('/').'/' }}"; 
	</script>
	<script src="{{ asset('js/booking.js') }}"></script>
@endsection