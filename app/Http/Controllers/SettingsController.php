<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Banner;
use App\Facts;

class SettingsController extends Controller
{
    public function index(){
    	$data['current'] = Auth::user();
      	$data['profile'] = Auth::user();
      	$data['title'] = 'Settings';
      	$data['page'] = 'Settings';
        $data['banner'] = Banner::all();
        $data['facts'] = Facts::take(3)->get();
    	return view('dashboard.settings.index' , $data);
    }

    public function storeBanner(Request $request){
    	$banner = new Banner;
    	$banner->banner_title = $request->input('title');
    	$banner->banner_text = $request->input('text');

    	$banner_photo = $request->file('banner');
    	$banner_photo->move(public_path().'/web/images/gallery',$banner_photo->getClientOriginalName().'.'.$banner_photo->getClientOriginalExtension());
    	$banner->banner = ''.url('/web/images/gallery/'.$banner_photo->getClientOriginalName().'.'.$banner_photo->getClientOriginalExtension());
    	$banner->save();
    	return redirect('/settings');
    }

    public function editBanner($id){
        $data['current'] = Auth::user();
        $data['profile'] = Auth::user();
        $data['title'] = 'Settings';
        $data['page'] = 'Settings';
        $data['banner'] = Banner::find($id);
        $data['banners'] = Banner::all();
        return view('dashboard.settings.edit' , $data);
    }

    public function updateBanner(Request $request,$id){
        $banner = Banner::find($id);
        $banner->banner_title = $request->input('title');
        $banner->banner_text = $request->input('text');

        if($request->hasFile('banner')){
            $banner_photo = $request->file('banner');
            $banner_photo->move(public_path().'/web/images/gallery',$banner_photo->getClientOriginalName().'.'.$banner_photo->getClientOriginalExtension());
            $banner->banner = ''.url('/web/images/gallery/'.$banner_photo->getClientOriginalName().'.'.$banner_photo->getClientOriginalExtension());
        }
        $banner->save();
        return redirect('/settings');
    }

    public function deleteBanner($id){
        $banner = Banner::find($id)->delete();
        return redirect('/settings');
    }

    public function updateFacts(Request $request){
        $f1 = Facts::find(1);
        $f1->title = $request->input('titleinfo-1');
        $f1->text = $request->input('textinfo-1');
        $f1->save();
        $f2 = Facts::find(2);
        $f2->title = $request->input('titleinfo-2');
        $f2->text = $request->input('textinfo-2');
        $f2->save();
        $f3 = Facts::find(3);
        $f3->title = $request->input('titleinfo-3');
        $f3->text = $request->input('textinfo-3');
        $f3->save();
        return redirect('/settings');
    }
}
