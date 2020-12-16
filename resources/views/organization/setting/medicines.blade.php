@extends('layouts.main')

@section('content')

	<!-- Page Wrapper -->
	<div class="page-wrapper" id="medicine">
		<!-- Page Content -->
		<div class="content container-fluid">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
					<h2 class="m-0 text-dark">Medicines</h2>
					</div><!-- /.col -->
					<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
						<li class="breadcrumb-item active">Medicines</li>
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

						<add-medicine></add-medicine>
						<div class="col-auto float-right ml-auto">
							<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add-medicine"><i class="fa fa-plus"></i> Add Medicine</a>

						</div>
					</div>
				</div>
				<div class="row">
					<view-medicines></view-medicines>
				</div>
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
