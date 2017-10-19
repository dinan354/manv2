<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\RoleData;
use Response;
use DB;

class UsersController extends Controller
{
  public function __construct() {
    // $this->middleware('auth');
  }

  public function getIndex(){
    $data['current'] = Auth::user();
    $data['profile'] = Auth::user();
    $data['title'] = 'Data Pengguna';
    $data['page'] = 'Data Pengguna';
    $data['roles'] = RoleData::where('id','>=',Auth::user()->roles[0]->id)->get();
    return view('dashboard.users.index', $data);
  }

  public function postAjaxadd(Request $request)
  {
    $check = User::where('email','=',$request->input('email'))->first();
    if($check) {
        return response()->json(['status'=> FALSE]);
    }
    $user = new User;
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->gender = $request->input('gender');
    $user->save();

    $user->roles()->attach($request->input('roles'));
    return response()->json(['status'=> TRUE]);
  }

  public function getAjaxedit($id){
    // $data = User::find($id);
    $data = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_user.user_id','=',$id)
            ->first();
    return response()->json($data);
  }

  public function postAjaxupdate(Request $request){
    if(! $request->ajax() ) {
      return response()->json(['status'=>false]);
    }
    $user = User::find($request->input('id'));
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    if($request->input('password') != ''){
        $user->password = bcrypt($request->input('password'));
    }
    $user->roles()->detach($user->roles[0]->id);
    $user->roles()->attach($request->input('roles'));
    $user->gender = $request->input('gender');
    $user->save();
    $respon = array('status'=>true);
    return response()->json($respon);
  }

  public function deleteAjaxdelete(Request $request, $id){
    if(! $request->ajax()) {
      return response()->json(['status'=>false]);
    }
    $user = User::destroy($id);

    $respon = array('status'=>true);
    return response()->json($respon);
  }


  public function getData(){
    $users = User::all();
    return Datatables::of($users)
    ->addColumn('action', function($users){
      $btn_detail = '<a href="#" title="Detail" onclick="detail_user('."'".$users->id."'".')" class="btn btn-default btn-icon btn-circle btn-lg"><i class="fa fa-list"></i></a>';
      $btn_edit = '<a href="#" title="Edit" onclick="edit_user('."'".$users->id."'".')" class="btn btn-primary btn-icon btn-circle btn-lg"><i class="fa fa-pencil"></i></a>';
      $btn_delete = '<a href="#" title="Delete" onclick="delete_user('."'".$users->id."'".')" class="btn btn-danger btn-icon btn-circle btn-lg"><i class="fa fa-trash"></i></a>';
      return $btn_detail.' '.$btn_edit.' '.$btn_delete;
    })->make(true);
  }
}
