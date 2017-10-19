<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  @include('layouts.meta')
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') - MAN BALIKPAPAN</title>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <link rel="stylesheet" type="text/css" href="{{ url('web/css/frontend.css') }}">
  <script type="text/javascript" src="{{ url('web/js/vendors/modernizr/modernizr.custom.js') }}"></script>
  @yield('styles')
  @yield('banner-override')
</head>
<body>
  <div class="smooth-overflow frontend">
    <!--Navigation-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}/">
          <img src="{{ url('web/images/man/logo.png') }}" width="170" style="margin-top:-10px;">
            <!-- <img src="{{ url('/') }}/images/photos/logos.png" style="margin-top:-15px;" width="150" height="50"> -->
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            @include('layouts.nav')
          </ul>
          <!--Sign In Form-->
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
              <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
              <li><a href="{{ url('logout') }}">Logout</a></li>
            @else
              <li><a href="{{ url('login') }}">Login</a></li>
              <li><a href="{{ url('register') }}">Register</a></li>
            @endif
          </ul>
          <!--/Sign In Form-->
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <!--/Navigation-->
    @yield('carousel')
    @yield('breadcrumbs')
    <!-- Page -->
    <div class="container frontend">
      <div class="row">
        <div class="clearfix"></div>
        @yield('page-header')
        @yield('content')
      </div>
    </div>
    <!-- Page Ends -->
    @include('layouts.footer')
  </div>
  @section('modal')
  @show
  <!-- scroll top -->
  <div class="scroll-top-wrapper hidden-xs">
    <i class="fa fa-angle-up"></i>
  </div>
  <!-- /scroll top -->
  <!--Scripts-->
  <script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!--BS-->
  <script type="text/javascript" src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- sweet alert -->.
  <script type="text/javascript" src="{{ asset('/bower_components/sweetalert/dist/sweetalert.min.js') }}"></script>
  <!--Main Script-->
  <script type="text/javascript" src="{{ asset('web/js/frontend.js') }}"></script>
  @include('sweet::alert')
  @yield('plugins')
  @stack('scripts')
</body>
</html>
