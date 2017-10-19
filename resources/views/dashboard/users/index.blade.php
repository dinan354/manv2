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
    <h4 class="panel-title">Data Pengguna</h4>
  </div>
  <div class="panel-body">

    <table class="table table-striped table-bordered" id="users-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">User Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Username</label>
              <div class="col-md-9">
                <input name="name" placeholder="Username" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Email</label>
              <div class="col-md-9">
                <input name="email" placeholder="Email Address" class="form-control" type="email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Gender</label>
              <div class="col-md-9">
                <select name="gender" class="form-control">
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="L">Laki Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Role</label>
              <div class="col-md-9">
                <select name="roles" class="form-control">
                  @foreach($roles as $r)
                    <option value="{{ $r->id }}">{{ $r->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Password</label>
              <div class="col-md-9">
                <input name="password" placeholder="Password" id="password" class="form-control" type="password">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modal_form_detail" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">User Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form-detail" class="form-horizontal">
          <input type="hidden" value="" name="id"/>
          <div class="form-body">
            <div class="form-group">
              <div>
                <img name="avatar" class="img img-rounded" src="{{ asset('uploads/profile_/default.jpg') }}" alt="Avatar" />
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Username</label>
              <div class="col-md-9">
                <input name="name" placeholder="Username" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Email</label>
              <div class="col-md-9">
                <input name="email" placeholder="Email Address" class="form-control" type="email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Gender</label>
              <div class="col-md-9">
                <select name="gender" class="form-control">
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="L">Laki Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Password</label>
              <div class="col-md-9">
                <input name="password" placeholder="Password" id="password" class="form-control" type="password">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" id="btnSave" class="btn btn-primary">Save</button> -->
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- End Bootstrap modal -->
@endsection

@section('plugins')
<script src="{{ asset('/assets/plugins/DataTables/js/jquery.dataTables.js') }}"></script>

<script type="text/javascript">
var table;
var save_method;

$(document).ready(function() {
  table = $('#users-table').DataTable({
    lengthMenu : [[10, 25, 50, 100, -1],[10, 25, 50, 100, "All"]],
    processing: true,
    serverSide: true,
    ajax: '{{ url("/users/data") }}',
    columns: [
      {data: 'id', name:'id'},
      {data: 'name', name:'name'},
      {data: 'email', name:'email'},
      {data: 'action', name:'action', searchable: false, orderable: false}
    ]
  });
});

function reload_table(){
  table.ajax.reload(null,false);
}

function add_user() {
  save_method = 'add';
  $('#form')[0].reset();
  $('#modal_form').modal('show');
  $('.modal-title').text('Add User');
  $('#password').prop('disabled', false);
}
// function detail_user(id){
//   //reset form on modal
//   $('#form-detail')[0].reset();
//   $.ajax({
//     url : "{{ url('users/ajaxedit/') }}/" + id,
//     type : "GET",
//     dataType: "JSON",
//     success: function(data) {
//
//       $('[name="id"]').val(data.id);
//       $('[name="name"]').val(data.name);
//       $('[name="email"]').val(data.email);
//       $('[name="gender"]').val(data.gender).attr('selected', 'selected');
//
//       $('[name="dob"]').val(data.dob);
//       $('[name="address"]').val(data.address);
//       $('[name="city"]').val(data.city);
//       $('[name="height"]').val(data.height);
//       $('[name="weight"]').val(data.weight);
//       $('[name="address"]').val(data.address);
//       $('[name="avatar"]').attr("src", data.avatar);
//       $('[name="bio"]').val(data.bio);
//       $('[name="mobile"]').val(data.mobile);
//       $('[name="phone"]').val(data.phone);
//
//       $('#modal_form_detail').modal('show');
//       $('.modal-title').text('Detail User');
//     },
//     error: function(jqXHR, textStatus, errorThrown){
//       alert('Error get data');
//     }
//   });
// }
function edit_user(id){
  save_method = 'update';
  $('#form')[0].reset(); // reset form on modals
  $('#password').prop('disabled', false);
  $.ajax({
    url : "{{ url('users/ajaxedit/') }}/" + id,
    type : "GET",
    dataType : "JSON",
    success: function(data){
      $('[name="id"]').val(data.user_id);
      $('[name="name"]').val(data.name);
      $('[name="email"]').val(data.email);
      $('[name="gender"]').val(data.gender).attr('selected', 'selected');
      $('[name="roles"]').val(data.role_id).attr('selected', 'selected');
      $('#modal_form').modal('show');
      $('.modal-title').text('Edit User');
    },
    error: function(jqXHR, textStatus, errorThrown){
      alert('Error get data from ajax');
    }
  });
}

function save() {
  var url;
  if(save_method == 'add') {
    url = "{{ url('users/ajaxadd') }}";
  } else {
    url = "{{ url('users/ajaxupdate') }}";
  }
  $.ajax({
    url: url,
    type: "POST",
    data: $('#form').serialize(),
    dataType: "JSON",
    success: function(data){
      //if success close modal and reload ajax table
      console.log(data);
      $('#modal_form').modal('hide');
      if(data.status == true){
        alert('Input berhasil');
      } else {
        alert('Input gagal');
      }
      reload_table();
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.log(jqXHR);
      console.log(textStatus);
      console.log(errorThrown);
      alert('Error adding / update data');
    }
  });
}

function delete_user(id) {
  if(confirm("Are you sure ?")){
    $.ajax({
      url : "{{ url('users/ajaxdelete') }}/"+id,
      type : "DELETE",
      dataType : "JSON",
      success : function(data){
        $('#modal_form').modal('hide');
        reload_table();
      },
      error : function(jqXHR, textStatus, errorThrown){
        alert("Error !!");
      }
    });
  }
}
</script>
@endsection
