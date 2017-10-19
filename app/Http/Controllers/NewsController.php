<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\News;
use RaccoonSoftware\Slug\Facade\Slug;
use Yajra\Datatables\Datatables;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function getIndex(){
      $data['current'] = Auth::user();
      $data['profile'] = Auth::user();
      $data['title'] = 'News';
      $data['page'] = 'News';
      return view('dashboard.news.index', $data);
    }

    public function getCreate(){
      $data['current'] = Auth::user();
      $data['profile'] = Auth::user();
      $data['title'] = 'News';
      $data['page'] = 'News';
      return view('dashboard.news.create', $data);
    }

    public function postStore(Request $request){
      $news = new News;
      $news->title = $request->input('title');
      $news->slug = Slug::convert($request->input('title'));
      $news->content = $request->input('content');
      $news->status = $request->input('status');
      $news->created_by = Auth::user()->id;
      $news->save();

      return redirect('/newslog');
    }

    public function getData(){
      $news = News::all();
      return Datatables::of($news)
      ->addColumn('user',function($news){
        return $news->user->name;
      })
      ->addColumn('action', function($news){
        $detailURL = url('/newslog/details/'.$news->id);
        $editURL = url('/newslog/edit/'.$news->id);
        $btn_detail = '<a href="'.$detailURL.'" title="Detail" class="btn btn-default btn-icon btn-circle btn-lg"><i class="fa fa-list"></i></a>';
        $btn_edit = '<a href="'.$editURL.'" title="Edit" class="btn btn-primary btn-icon btn-circle btn-lg"><i class="fa fa-pencil"></i></a>';
        $btn_delete = '<a onclick="popupDelete(\''.$news->id.'\')" title="Delete" onclick="delete_user('."'".$news->id."'".')" class="btn btn-danger btn-icon btn-circle btn-lg"><i class="fa fa-trash"></i></a>';
        return $btn_detail.' '.$btn_edit.' '.$btn_delete;
      })->make(true);
    }

    public function getEdit($id){
      $data['current'] = Auth::user();
      $data['profile'] = Auth::user();
      $data['title'] = 'News';
      $data['page'] = 'News';
      $data['news'] = News::find($id);
      return view('dashboard.news.edit', $data);
    }

    public function postUpdate(Request $request , $id){
      $news = News::find($id);
      $news->title = $request->input('title');
      $news->slug = Slug::convert($request->input('title'));
      $news->content = $request->input('content');
      $news->status = $request->input('status');
      $news->save();

      return redirect('/newslog');
    }

    public function getDelete($id){
      $news = News::find($id);
      $news->delete();
      return redirect('/newslog');
    }

    public function getActivate($id){
      $news = News::find($id);
      $news->status = 1;
      $news->save();
      return redirect('/newslog/details/'.$id);
    }

    public function getDeactivate($id){
      $news = News::find($id);
      $news->status = 0;
      $news->save();
      return redirect('/newslog/details/'.$id);
    }

    public function getDetails($id){
      $data['current'] = Auth::user();
      $data['profile'] = Auth::user();
      $data['title'] = 'News';
      $data['page'] = 'News';
      $data['news'] = News::find($id);
      return view('dashboard.news.details', $data);
    }
}
