@extends('layouts.dashboard')
@section('title',$title)

@section('breadcrumbs')
@parent
<li><a href="{{ url('/dashboard') }}">Home</a></li>
<li class="active">Profile</li>
@endsection

@section('page-header')
  @parent
 {{ isset($page) ? $page : 'Default Page' }}
@endsection

@section('content')
<!-- begin profile-container -->
<div class="profile-container">
  <!-- begin profile-section -->
  <div class="profile-section">
    <!-- begin profile-left -->
    <div class="profile-left">
      <!-- begin profile-image -->
      <div class="profile-image">
        <!-- <img src="{{ url('/') }}/uploads/profile_/" /> -->
        <i class="fa fa-user hide"></i>
      </div>
      <!-- end profile-image -->
      <div class="m-b-10">
        <a href="{{ url('/profile/edit') }}" class="btn btn-warning btn-block btn-sm">Edit Profile</a>
      </div>
      <!-- begin profile-highlight -->
      <!-- end profile-highlight -->
    </div>
    <!-- end profile-left -->
    <!-- begin profile-right -->
    <div class="profile-right">
      <!-- begin profile-info -->
      <div class="profile-info">
        <!-- begin table -->
        <div class="table-responsive">
          <table class="table table-profile">
            <thead>
              <tr>
                <th></th>
                <th>
                  <h4>{{ $current->name }} <small>{{ $current->myrole[0]->name }}</small></h4>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="divider">
                <td colspan="2"></td>
              </tr>
              <form class="form form-horizontal" method="post" action="{{ url('/profile/edit') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <tr>
                <td class="field">Email</td>
                <td><input class="form-control" type="text" name="email" value="{{ $profile->email }}"></td>
              </tr>
              <tr>
                <td class="field">Password</td>
                <td> <input class="form-control" type="password" name="pass" value="">
                <small style="color:red;">isi hanya jika ingin merubah password</small>
                </td>
              </tr>
              <tr>
                <td class="field">Role</td>
                <td> {{ $current->myrole[0]->name }} </td>
              </tr>
              <tr class="divider">
                <td colspan="2"></td>
              </tr>
              <tr class="highlight">
                <td class="field">NIP</td>
                <td><input class="form-control" type="text" name="nip" value="{{ $profile->nip }}"></td>
              </tr>
              <tr>
                <td class="field">Pangkat</td>
                <td><input class="form-control" type="text" name="pangkat" value="{{ $profile->pangkat }}"></td>
              </tr>
              <tr>
                <td colspan="2">
                <button type="submit" class="btn btn-warning btn-block btn-sm">Save</button>
                </td>
              </tr>
              </form>
            </tbody>

          </table>
        </div>
        <!-- end table -->
      </div>
      <!-- end profile-info -->
    </div>
    <!-- end profile-right -->
  </div>
  <!-- end profile-section -->
</div>
<!-- end profile-container -->
@endsection
