@extends('layouts.main')

@section('content')

	<!-- Page Wrapper -->
	<div class="page-wrapper" id="route">
		<!-- Page Content -->
		<div class="content container-fluid">
			<!-- Page Header -->
			<div class="page-header">
				<div class="row align-items-center">
					<div class="col">
						<h3 class="page-title">Routes</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
							<li class="breadcrumb-item active">Routes</li>
						</ul>
					</div>
					<add-route></add-route>
					<div class="col-auto float-right ml-auto">
						<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add-route"><i class="fa fa-plus"></i> Add Routes</a>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
			<div class="row">
				<view-route></view-route>
			</div>
		</div>
		<!-- /Page Content -->

	</div>
	<!-- /Page Wrapper -->
	<script type="text/javascript">
		var base_url = "{{ url('/').'/' }}";
	</script>
	<script src="{{ asset('js/route.js') }}"></script>
@endsection
