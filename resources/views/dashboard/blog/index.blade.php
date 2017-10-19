@extends('layouts.dashboard')
@section('title',$title)
@section('styles')
<link href="{{ asset('/assets/plugins/DataTables/css/data-table.css') }}" rel="stylesheet" />
@endsection
@section('breadcrumbs')
@parent
<li><a href="{{ url('/dashboard') }}">Home</a></li>
<li class="active">Blog</li>
@endsection
@section('page-header')
@parent
{{ isset($page) ? $page : 'Default Page' }}
@endsection

@section('content')
<div class="panel panel-inverse">
  <div class="panel-heading">
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
      <a href="javascrpt:void()" title="Add User" onClick="add_user()" class="btn btn-xs btn-primary btn-icon btn-circle"><i class="fa fa-plus"></i></a>
    </div>
    <h4 class="panel-title">Data Blog</h4>
  </div>
  <div class="panel-body">

    <table class="table table-striped table-bordered" id="news-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Status</th>
          <th>User</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>

@endsection

@section('plugins')
<script src="{{ asset('/assets/plugins/DataTables/js/jquery.dataTables.js') }}"></script>
@endsection
@push('scripts')
<script type="text/javascript">
var table;
var save_method;
$(document).ready(function() {
  table = $('#news-table').DataTable({
    lengthMenu : [[10, 25, 50, 100, -1],[10, 25, 50, 100, "All"]],
    processing: true,
    serverSide: true,
    ajax: '{{ url("/weblog/data") }}',
    columns: [
      {data: 'id', name:'id'},
      {data: 'title', name:'title'},
      {data: 'webstatus', name:'webstatus'},
      {data: 'user', name:'user'},
      {data: 'action', name:'action', searchable: false, orderable: false}
    ]
  });
});

function reload_table(){
  table.ajax.reload(null,false);
}

function popupDelete(id){
  var choice = confirm('Are you sure to delete?');
  if(choice){
    window.location = "{{ url('/weblog') }}/delete/"+id;
  }
}
</script>
@endpush
