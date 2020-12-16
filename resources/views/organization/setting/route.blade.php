@extends('layouts.main')

@section('content')

	<!-- Page Wrapper -->
	<div class="page-wrapper" id="route">
		<!-- Page Content -->
		<div class="content container-fluid">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
					<h2 class="m-0 text-dark">Routes</h2>
					</div><!-- /.col -->
					<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
						<li class="breadcrumb-item active">Routes</li>
					</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">

						<add-route></add-route>
						<div class="col-auto float-right ml-auto">
							<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add-route"><i class="fa fa-plus"></i> Add Routes</a>

						</div>
					</div>
				</div>
				<div class="row">
					<view-route></view-route>
				</div>
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
