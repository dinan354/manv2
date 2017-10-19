@extends('layouts.dashboard')
@section('title',$title)
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
			
		    <h4 class="panel-title">Settings</h4>
		</div>
		<div class="panel-body">
			<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
		        <li class="active"><a href="#tabone" data-toggle="tab">Banner</a></li>
		        <li><a href="#tabtwo" data-toggle="tab">Info</a></li>
		    </ul>
		    <div id="my-tab-content" class="tab-content">
		        <div class="tab-pane active" id="tabone">
		            <div id="new-banner-form">
		            	<form class="form form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/settings/banner/store') }}">
		            		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		            		<div class="form-group">
		            			<label class="control-label col-md-2">File Banner</label>
		            			<div class="col-md-8">
		            				<input type="file" name="banner" required="true" class="form-control">
		            				<p class="muted">Max 2MB</p>
		            			</div>
		            		</div>
		            		<div class="form-group">
		            			<label class="control-label col-md-2">Judul Banner</label>
		            			<div class="col-md-8">
		            				<input type="text" name="title" required="true" class="form-control">
		            			</div>
		            		</div>
		            		<div class="form-group">
		            			<label class="control-label col-md-2">Text Banner</label>
		            			<div class="col-md-8">
		            				<input type="text" name="text" required="true" class="form-control">
		            			</div>
		            		</div>
		            		<div class="form-group">
		            			<div class="col-md-8 col-md-offset-2">
		            				<button class="btn btn-primary">Save</button>
		            			</div>
		            		</div>		
		            	</form>
		            </div>
		            <div id="banner-list">
		            	<table class="table table-stripped">
		            		<thead>
		            			<th>Banner URL</th>
		            			<th>Judul</th>
		            			<th>Teks</th>
		            			<th>Action</th>
		            		</thead>
		            		<tbody>
		            			@foreach($banner as $bn)
		            				<tr>
		            					<td>{{ $bn->banner }}</td>
		            					<td>{{ $bn->banner_title }}</td>
		            					<td>{{ $bn->banner_text }}</td>
		            					<td>
		            						<a href="{{ url('/settings/banner/edit/'.$bn->id) }}">Edit</a>
		            						<a href="{{ url('/settings/banner/delete/'.$bn->id) }}">Delete</a>
		            					</td>
		            				</tr>
		            			@endforeach
		            		</tbody>
		            	</table>
		            </div>
		        </div>
		        <div class="tab-pane" id="tabtwo">
		            <h1>Info</h1>
		            <form class="form form-horizontal" method="post" action="{{ url('/settings/facts/store') }}">
		            <input type="hidden" name="_token" value="{{ csrf_token() }}">
		            <?php $info_count = 0;?>
		            @foreach($facts as $fact)
		            	<?php $info_count++; ?>
		            	<div class="form-group">
		            		<label class="control-label col-md-2">Info {{ $info_count }}</label>
		            		<div class="col-md-8">
		            			<input value="{{ $fact->title }}" type="text" name="titleinfo-{{$info_count}}" required="true" class="form-control">
		            		</div>
		            	</div>
		            	<div class="form-group">
		            		<label class="control-label col-md-2">Info {{ $info_count }}</label>
		            		<div class="col-md-8">
		            			<input value="{{ $fact->text }}" type="text" name="textinfo-{{$info_count}}" required="true" class="form-control">
		            		</div>
		            	</div>
		            	<hr>
		            @endforeach
		            <div class="form-group">
		            			<div class="col-md-8 col-md-offset-2">
		            				<button class="btn btn-primary">Save</button>
		            			</div>
		            		</div>		
		            </form>
		        </div>
		    </div>
		</div>
	</div>
@endsection