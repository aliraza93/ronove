@extends('layouts.main')

@section('content')

	<!-- Page Wrapper -->
	<div class="page-wrapper" id="medicine">
		<!-- Page Content -->
		<div class="content container-fluid">
			<!-- Page Header -->
			<div class="page-header">
				<div class="row align-items-center">
					<div class="col">
						<h3 class="page-title">Medicines</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
							<li class="breadcrumb-item active">Medicines</li>
						</ul>
					</div>
					<add-medicine></add-medicine>
					<div class="col-auto float-right ml-auto">
						<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add-medicine"><i class="fa fa-plus"></i> Add Medicine</a>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
			<div class="row">
				<view-medicines></view-medicines>
			</div>
		</div>
		<!-- /Page Content -->

	</div>
	<!-- /Page Wrapper -->
	<script type="text/javascript">
		var base_url = "{{ url('/').'/' }}";
	</script>
	<script src="{{ asset('js/setting.js') }}"></script>
@endsection
