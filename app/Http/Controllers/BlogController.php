<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Blog;
use RaccoonSoftware\Slug\Facade\Slug;
use Yajra\Datatables\Datatables;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function getIndex(){
      $data['current'] = Auth::user();
      $data['profile'] = Auth::user();
      $data['title'] = 'Blog';
      $data['page'] = 'Blog';
      return view('dashboard.blog.index' , $data);
    }

    public function getCreate(){
      $data['current'] = Auth::user();
      $data['profile'] = Auth::user();
      $data['title'] = 'Blog';
      $data['page'] = 'Blog';
      return view('dashboard.blog.create' , $data);
    }

    public function postStore(Request $request){
      $blog = new Blog;
      $blog->title = $request->input('title');
      $blog->slug = Slug::convert($request->input('title'));
      $blog->content = $request->input('content');
      if(Auth::user()->myrole[0]->id < 4){
        $blog->status = $request->input('status');
      } else {
        $blog->status = 0;
      }
      $blog->user_id = Auth::user()->id;
      $blog->save();

      return redirect('/weblog');
    }

    public function getEdit($id){
      $data['current'] = Auth::user();
      $data['profile'] = Auth::user();
      $data['title'] = 'Blog';
      $data['page'] = 'Blog';
      $data['blog'] = Blog::find($id);
      return view('dashboard.blog.edit', $data);
    }

    public function postUpdate(Request $request , $id){
      $blog = Blog::find($id);
      $blog->title = $request->input('title');
      $blog->slug = Slug::convert($request->input('title'));
      $blog->content = $request->input('content');

      if(Auth::user()->myrole[0]->id < 4){
          $blog->status = $request->input('status');
      } else {
          $blog->status = 0;
      }

      $blog->save();
      return redirect('/weblog');
    }

    public function getDelete($id){
      $blog = Blog::find($id);
      $blog->delete();
      return redirect('/weblog');
    }

    public function getDetails($id){
      $data['current'] = Auth::user();
      $data['profile'] = Auth::user();
      $data['title'] = 'Blog';
      $data['page'] = 'Blog';
      $data['blog'] = Blog::find($id);
      return view('dashboard.blog.details', $data);
    }

    public function getActivate($id){
      $blog = Blog::find($id);
      $blog->status = 1;
      $blog->save();
      return redirect('/weblog/details/'.$id);
    }

    public function getDeactivate($id){
      $blog = Blog::find($id);
      $blog->status = 0;
      $blog->save();
      return redirect('/weblog/details/'.$id);
    }

    public function getData(){
      if(Auth::user()->myrole[0]->id == 1 || Auth::user()->myrole[0]->id == 2){
          $blog = Blog::all();
      } else {
          $blog = Blog::where('user_id','=',Auth::user()->id)->get();
      }
      return Datatables::of($blog)
      ->addColumn('user',function($blog){
        return $blog->user->name;
      })
      ->addColumn('webstatus',function($blog){
        if($blog->status == 1){
          return "Aktif";
        } else {
          return "Tidak Aktif";
        }
      })
      ->addColumn('action', function($blog){
        $detailURL = url('/weblog/details/'.$blog->id);
        $editURL = url('/weblog/edit/'.$blog->id);
        $btn_detail = '<a href="'.$detailURL.'" title="Detail" class="btn btn-default btn-icon btn-circle btn-lg"><i class="fa fa-list"></i></a>';
        $btn_edit = '<a href="'.$editURL.'" title="Edit" class="btn btn-primary btn-icon btn-circle btn-lg"><i class="fa fa-pencil"></i></a>';
        $btn_delete = '<a onclick="popupDelete(\''.$blog->id.'\')" title="Delete" onclick="delete_user('."'".$blog->id."'".')" class="btn btn-danger btn-icon btn-circle btn-lg"><i class="fa fa-trash"></i></a>';
        return $btn_detail.' '.$btn_edit.' '.$btn_delete;
      })->make(true);
    }
}
