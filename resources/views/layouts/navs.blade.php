<li class="has-sub">
  <a href="javascript:;">
    <b class="caret pull-right"></b>
    <i class="fa fa-laptop"></i>
    <span>Dashboard</span>
  </a>
  <ul class="sub-menu">
    <li><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
  </ul>
</li>
@if($current->myrole[0]->id < 3)
<li><a href="{{ url('/') }}/users"><i class="fa fa-user"></i> <span>Users</span></a></li>
@endif
<li class="has-sub">
  <a href="javascript:;">
    <b class="caret pull-right"></b>
    <i class="fa fa-newspaper-o"></i>
    <span>News Log</span>
  </a>
  <ul class="sub-menu">
    <li><a href="{{ url('/') }}/newslog">List</a></li>
    <li><a href="{{ url('/') }}/newslog/create">Create New</a></li>
  </ul>
</li>
<li class="has-sub">
  <a href="javascript:;">
    <b class="caret pull-right"></b>
    <i class="fa fa-newspaper-o"></i>
    <span>Blog</span>
  </a>
  <ul class="sub-menu">
    <li><a href="{{ url('/') }}/weblog">List</a></li>
    <li><a href="{{ url('/') }}/weblog/create">Create New</a></li>
  </ul>
</li>
<li><a href="{{ url('/') }}/settings"><i class="fa fa-gear"></i> Page Settings</a></li>
