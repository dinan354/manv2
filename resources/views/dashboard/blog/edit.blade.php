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
    <h4 class="panel-title">Blog</h4>
  </div>
  <div class="panel-body">

    <form class="form form-horizontal" method="post" action="{{ url('/weblog/update') }}/{{ $blog->id }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label class="control-label col-md-2">Judul</label>
        <div class="col-md-8">
          <input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2">Konten</label>
        <div class="col-md-8">
          <textarea id="editor" name="content" required>{{ $blog->content }}</textarea>
        </div>
      </div>
      @if($current->myrole[0]->id < 4)
      <div class="form-group">
        <label class="control-label col-md-2">Status</label>
        <div class="col-md-4">
          <select class="form-control" name="status" required>
            @if($blog->status == 1 )
              <option value="1" selected>Aktif</option>
              <option value="0">Tidak Aktif</option>
            @else
              <option value="1">Aktif</option>
              <option value="0" selected>Tidak Aktif</option>
            @endif
          </select>
        </div>
      </div>
      @else
        <input type="hidden" value="0" name="status"/>
      @endif
      <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
          <button class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>

  </div>
</div>

@endsection

@section('plugins')
<script src="{{ asset('/bower_components/ckeditor/ckeditor.js') }}"></script>
@endsection
@push('scripts')
  <script type="text/javascript">

    CKEDITOR.replace('editor',{
      language: 'en',
      'extraPlugins': "imagebrowser,mediaembed",
      imageBrowser_listUrl: "{{ url('/api/ckeditor/gallery') }}",
      filebrowserBrowseUrl: '/api/v1/ckeditor/files',
      filebrowserImageUploadUrl: "{{ url('/api/ckeditor/upload') }}",
      filebrowserUploadUrl: "{{ url('/api/ckeditor/upload') }}",
      toolbarLocation: 'top',
      toolbar: 'full',
    });

  </script>
@endpush
