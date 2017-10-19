<?php
Route::group(['middleware' => 'web'], function() {
  Route::auth();
  Route::get('/', 'FrontController@getIndex');
  Route::get('/news', 'FrontController@getNews');
  Route::get('/news/{slug}', 'FrontController@getNewsDetail');
  Route::get('/about-us', 'FrontController@getAboutUs');
  Route::get('/contact', 'FrontController@getContact');
  Route::get('/faq', 'FrontController@getFaq');
  Route::get('/blog', 'FrontController@getBlog');
  Route::get('/blog/{slug}', 'FrontController@getBlogsDetail');
  Route::get('/guru','GuruController@index');
  Route::get('/guru/{slug}','GuruController@listguru');
  Route::get('/galleries', 'GalleryController@getList');

});

Route::get('/api/ckeditor/gallery' , function(){
    $rel = '/uploads/images';
    $dir = public_path() . '/uploads/images';
    // $iterator = $this->finder->in($dir)->name('*.png')->name('*.jpg');
    $files = File::files('uploads/images');;
    $count = 0;
    $ff = [];
    foreach($files as $file) {
      $ff[$count]['thumb'] = URL::to('/').'/'.$file;
      $ff[$count]['image'] = URL::to('/').'/'.$file;
      $ex = explode('/',$file);
      $ff[$count]['title'] = $ex[2];
      $count ++;
    }
    return Response::json($ff);
  });

  Route::post('/api/ckeditor/upload', function(){
    $rel = 'uploads/images';
    $dir = URL::to('/').'/'.$rel;
    $tmp = $_FILES['upload']['tmp_name'];
    $dest = 'uploads/images/' . $_FILES['upload']['name'];
    File::move($tmp, $dest);
    // $funcNum = $_GET['CKEditorFuncNum'];
    // $funcNum = Input::get('CKEditorFuncNum');
    $file = URL::to('/').'/'.$_FILES['upload']['tmp_name'];
    chmod($dest , 0755);
    $message = "File uploaded";
    $script = "<script type='text/javascript'>alert('".$message."')</script>";
    // $script =  "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction(\"$funcNum\", \"$file\", \"$message\");</script>";
    return $script;
  });

Route::group(['middleware' => ['web','auth']] , function(){
  Route::get('/dashboard', [
    'as'=>'dashboard',
    'uses'=>'DashboardController@getIndex'
  ]);
  Route::get('/profile', [
    'as' => 'profile',
    'uses' => 'ProfileController@getIndex'
  ]);
  Route::get('/profile/edit', [
    'as' => 'profile.edit',
    'uses' => 'ProfileController@getEdit'
  ]);
  Route::post('/profile/edit', [
    'as' => 'profile.save',
    'uses' => 'ProfileController@postEdit'
  ]);
  Route::get('/setting' , [
    'as' => 'setting',
    'uses' => 'ProfileController@getSetting'
  ]);
  Route::get('/newslog','NewsController@getIndex');
  Route::get('/newslog/create','NewsController@getCreate');
  Route::post('/newslog/store', 'NewsController@postStore');
  Route::get('/newslog/edit/{id}','NewsController@getEdit');
  Route::post('/newslog/update/{id}', 'NewsController@postUpdate');
  Route::get('/newslog/delete/{id}','NewsController@getDelete');
  Route::get('/newslog/details/{id}','NewsController@getDetails');
  Route::get('/newslog/data','NewsController@getData');

  Route::get('/weblog','BlogController@getIndex');
  Route::get('/weblog/create','BlogController@getCreate');
  Route::post('/weblog/store', 'BlogController@postStore');
  Route::get('/weblog/edit/{id}','BlogController@getEdit');
  Route::post('/weblog/update/{id}', 'BlogController@postUpdate');
  Route::get('/weblog/delete/{id}','BlogController@getDelete');
  Route::get('/weblog/details/{id}','BlogController@getDetails');
  Route::get('/weblog/data','BlogController@getData');
});

Route::group(['middleware' => ['web','auth','admindanguru']],function(){
  Route::get('/settings','SettingsController@index');
  Route::post('/settings/banner/store','SettingsController@storeBanner');
  Route::get('/settings/banner/edit/{id}','SettingsController@editBanner');
  Route::post('/settings/banner/update/{id}','SettingsController@updateBanner');
  Route::get('/settings/banner/delete/{id}','SettingsController@deleteBanner');
  Route::post('/settings/facts/store','SettingsController@updateFacts');
});

Route::group(['middleware' => ['web','auth','superadmin']], function() {

  Route::controllers([
    'users' => 'UsersController'
  ]);
  Route::get('/weblog/activate/{id}','BlogController@getActivate');
  Route::get('/weblog/deactivate/{id}','BlogController@getDeactivate');
  Route::get('/newslog/activate/{id}','NewsController@getActivate');
  Route::get('/newslog/deactivate/{id}','NewsController@getDeactivate');
});
