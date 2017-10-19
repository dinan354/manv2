<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\User;
use App\Blog;

class GuruController extends Controller
{
    public function index(){
        $data['title'] = 'Guru';
        $data['page'] = 'Guru';
        $data['listguru'] = DB::table('users')
        	->leftjoin('role_user','users.id','=','role_user.user_id')
        	->where('role_user.role_id','=',3)->get();
        return view('fronts.guru', $data);
    }

    public function listguru($slug){
    	$user = User::where('slug','=',$slug)->first();
    	$data['title'] = 'Guru';
        $data['page'] = 'Guru';
        $data['blogs'] = Blog::where('status','=',1)->where('user_id','=',$user->id)->paginate(2);
      	return view('fronts.blogs', $data);	
    }
}
