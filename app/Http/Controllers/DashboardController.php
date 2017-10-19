<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controlsler;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function getIndex()
  {
    $data['current'] = Auth::user();
    $data['profile'] = Auth::user();
    return view('home', $data);
  }
}
