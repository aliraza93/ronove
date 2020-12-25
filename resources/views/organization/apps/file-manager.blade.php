@extends('layouts.main')

@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper" id="file-manager">
  <!-- Page Content -->
  <div class="content container-fluid">
		
    <div class="row">
      <div class="col-sm-12">
        <div class="file-wrap">
          <div class="file-sidebar">
            <div class="file-header justify-content-center">
              <div class="row">
                <div class="col-md-6">
                  <span class="text-left">Projects</span>
                  <a href="javascript:void(0);" class="file-side-close"><i class="fa fa-times"></i></a>
                </div>
                <div class="col-md-6">
                  <a href="#" class="btn add-btn btn-sm" data-toggle="modal" data-target="#add-project"><i class="fa fa-plus"></i> Add Project</a>
                </div>
              </div>
            </div>
            <view-projects></view-projects>
          </div>
          <view-files></view-files>
        </div>
      </div>
    </div>
    <add-project></add-project>
  </div>
  <!-- /Page Content -->
  
</div>
<script type="text/javascript">
	var base_url = "{{ url('/').'/' }}"; 
</script>
<script src="{{ asset('js/file-manager.js') }}"></script>

@endsection