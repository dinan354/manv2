<div id="header" class="header navbar navbar-default navbar-fixed-top">
  <!-- begin container-fluid -->
  <div class="container-fluid">
    <!-- begin mobile sidebar expand / collapse button -->
    <div class="navbar-header">
      <a href="{{ url('/dashboard') }}" class="navbar-brand"><img src="{{ url('/assets/img/logo.png') }}" style="margin-top:-10px;" width="170"/></a>
      <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- end mobile sidebar expand / collapse button -->

    <!-- begin header navigation right -->
    <ul class="nav navbar-nav navbar-right">
      <li>
        <form class="navbar-form full-width">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter keyword" />
            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
          </div>
        </form>
      </li>
      <li class="dropdown navbar-user">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
          <img src="{{ url('/') }}/uploads/profile_/{{ $profile->profile->avatar or 'default.jpg' }}" alt="" />
          <span class="hidden-xs">{{ $current->name }}</span> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu animated fadeInLeft">
          <li class="arrow"></li>
          <li><a href="{{ url('/profile') }}">Profile</a></li>
          <li class="divider"></li>
          <li><a href="{{ url('/logout') }}">Log Out</a></li>
        </ul>
      </li>
    </ul>
    <!-- end header navigation right -->
  </div>
  <!-- end container-fluid -->
</div>
