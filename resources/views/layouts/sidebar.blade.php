<div id="sidebar" class="sidebar">
  <!-- begin sidebar scrollbar -->
  <div data-scrollbar="true" data-height="100%">
    <!-- begin sidebar user -->
    <ul class="nav">
      <li class="nav-profile">
        <div class="image">
          <a href="javascript:;"><img src="{{ url('/') }}/uploads/profile_/{{ $profile->profile->ava or 'default.jpg' }}" alt="" /></a>
        </div>
        <div class="info">
          {{ $current->name }}
          <small> {{ $current->myrole[0]->name }} </small>
        </div>
      </li>
    </ul>
    <!-- end sidebar user -->
    <!-- begin sidebar nav -->
    <ul class="nav">
      <li class="nav-header">Navigation</li>
      @if($current->myrole[0]->id == 1)
        @include('layouts.navs')
      @elseif($current->myrole[0]->id == 2)
        @include('layouts.navs')
      @elseif($current->myrole[0]->id == 3)
        @include('layouts.navs')
      @elseif($current->myrole[0]->id == 4)
        @include('layouts.nav_student')
      @elseif($current->myrole[0]->id == 5)
        @include('layouts.nav_parent')
      @else
      @endif  
      <!-- begin sidebar minify button -->
      <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
      <!-- end sidebar minify button -->
    </ul>
    <!-- end sidebar nav -->
  </div>
  <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
