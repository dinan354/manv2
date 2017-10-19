@extends('layouts.dashboard')
@section('title',$title)
@section('styles')
<link href="{{ asset('/assets/plugins/DataTables/css/data-table.css') }}" rel="stylesheet" />
@endsection
@section('breadcrumbs')
@parent
<li><a href="{{ url('/dashboard') }}">Home</a></li>
<li class="active">Users</li>
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
    <h4 class="panel-title">News Log</h4>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-10">
        <h2>{{ $news->title }}</h2>
      </div>
      <div class="col-md-2">
        @if($current->myrole[0]->id == 1)
          @if($news->status == 0)
            <a href="{{ url('/newslog/activate/') }}/{{ $news->id }}" class="btn btn-primary">Tambahkan ke web</a>
          @else
            <a href="{{ url('/newslog/deactivate/') }}/{{ $news->id }}" class="btn btn-primary">Hapus dari web</a>
          @endif
        @else
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        {!! $news->content !!}
      </div>
    </div>
  </div>
</div>

@endsection

@section('plugins')
<script src="{{ asset('/bower_components/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/js/ckconfig.js') }}"></script>
@endsection
