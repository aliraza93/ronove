@extends('layouts.main')

@section('content')
	<!-- Page Wrapper -->
	<div class="page-wrapper" id="booking">
		<!-- Page Content -->
		<div class="content container-fluid">
			<!-- Page Header -->
			<div class="page-header">
				<div class="row align-items-center">
					<div class="col">
						<h3 class="page-title">Bookings</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
							<li class="breadcrumb-item active">Approved Bookings</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
			<div class="row">
				<view-approved-bookings></view-approved-bookings>
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