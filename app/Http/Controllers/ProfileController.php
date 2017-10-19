<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
    public function getIndex(){
      $data['title'] = 'Profile';
      $data['current'] = Auth::user();
      $data['profile'] = Auth::user();
      return view('dashboard.profile', $data);
    }

    public function getEdit(){
      $data['title'] = 'Profile';
      $data['current'] = Auth::user();
      $data['profile'] = Auth::user();
      return view('dashboard.profileedit', $data);	
    }

    public function postEdit(Request $request){
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	$user->email = $request->input('email');
    	if($request->input('pass') != ''){
    		$user->password = $request->input('pass');
    	}
    	$user->nip = $request->input('nip');
    	$user->pangkat = $request->input('pangkat');
    	$user->save();
    	return redirect('/profile');
    }
}
