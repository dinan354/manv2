@extends('layouts.app')
@section('title', 'News')
@section('keywords', 'News MAN Balikpapan')
@section('breadcrumbs')

<!-- Page -->
    <div class="container news-top">
      <div class="row">
        <div class="clearfix"></div>
                        <div class="col-md-8">
  <!-- Blog Post Starts -->
  <div class="blog-post">
    <div class="blog-header">
      <!--Big Date-->
      <div class="blog-date">
        <span class="month">{{ date("F", mktime(0, 0, 0, Carbon::parse($ns->created_at)->month, 10)) }}</span>
        <span class="day">{{ Carbon::parse($ns->created_at)->day }}</span>
        <span class="year">{{ Carbon::parse($ns->created_at)->year }}</span>
      </div>
      <!--/Big Date-->
      <div class="page-header">
        <h1>{{ $ns->title }}</h1>
      </div>
      <div class="blog-info clearfix">
        <div class="pull-left">
          <i class="fa fa-folder-open">
          </i>: <a href="#">Activity</a>
          By: <a href="#">{{ $ns->user->name }}</a>
        </div>
        <button class="btn btn-default btn-xs pull-right hidden-xs"><span><i class="fa fa-heart"></i></span> 256</button>
      </div>
    </div>
    {!! $ns->content !!}
  </div>
  <!-- Blog Post Ends -->
  </div>
  <!-- /Left Side-->
  <!--Block Right-->
  <div class="col-md-4 margin-top">
    <!-- tabs green-->
    <div class="tabs margin-bottom-20px">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#one-normal" data-toggle="tab"><i class="fa fa-quote-right"></i> One</a></li>
        <li><a href="#two-normal" data-toggle="tab"><i class="fa fa-quote-right"></i> Two</a></li>
        <li><a href="#three-normal" data-toggle="tab"><i class="fa fa-quote-right"></i> Three</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="one-normal">Pendidikan adalah kemampuan untuk mendengarkan hampir semuanya tanpa kehilangan kesabaran atau kepercayaan dirimu. <br>~ Robert Frost</div>
        <div class="tab-pane" id="two-normal">Akar pendidikan itu pahit, tapi buahnya manis. <br> ~ Aristotle</div>
        <div class="tab-pane" id="three-normal">Aku lebih memilih menghibur orang dan berharap mereka belajar daripada mengajar orang dan berharap mereka terhibur. <br>~ Walt Disney</div>
      </div>
    </div>
    <!-- /tabs -->

  </div>
  <!-- /Row Block Right-->
        </div>
    </div>
    <!-- Page Ends -->
@endsection    