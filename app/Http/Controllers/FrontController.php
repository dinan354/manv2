<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Blog;
use App\Banner;
use App\Facts;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function getIndex(){
      $data['banner'] = Banner::all();
      $data['facts'] = Facts::take(3)->get();
      return view('welcome',$data);
    }
    
    public function getNews(){

      $data['news'] =  News::where('status','=',1)->paginate(2);
      return view('fronts.news', $data);
    }

    public function getNewsDetail($slug){
      $data['ns'] =  News::where('slug','=',$slug)->first();

      return view('fronts.news-detail', $data);
      
    }

    public function getBlog(){
      $data['blogs'] = Blog::where('status','=',1)->paginate(2);
      return view('fronts.blogs', $data);      
    }

    public function getBlogsDetail($slug){
      $data['ns'] =  Blog::where('slug','=',$slug)->first();

      return view('fronts.blogs-detail', $data);
      
    }

    public function getAboutUs(){
      return view('fronts.about');
    }
    public function getContact(){
      return view('fronts.contact');
    }
    public function getFaq(){
      return view('fronts.faq');
    }
}
