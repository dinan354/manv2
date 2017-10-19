@extends('layouts.app')
@section('title', 'Contact Us')
@section('keywords', 'Contact MAN Balikpapan')
@section('breadcrumbs')
<div class="container">
<div class="row">
      <div class="breadcrumb clearfix">
        <ul>
          <li><a href="./"><i class="fa fa-home"></i></a></li>
          <li class="active">Hubungi Kamu</li>
        </ul>
        <!--Search-->
        <div class="site-search pull-right">
          <form action="#" id="inline-search">
            <i class="fa fa-search"></i>
            <input type="search" placeholder="Search">
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('page-header')
	<div class="page-header">
        <h1>Hubungi Kami <small>Contact Us</small></h1>
  </div>
@endsection
@section('content')
<div class="col-md-12">
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:1100px;'><div id='gmap_canvas' style='height:440px;width:1100px;'></div><div><small><a href="http://embedgooglemaps.com">                 embed google maps             </a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-1.2747089,116.8194303),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-1.2747089,116.8194303)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>MAN Balikpapan<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>

<div class="row">

  <div class="col-md-6" style="margin-left: 20px;">
    <br><br><br>
    <h1>MAN Balikpapan</h1>
    <h5>Jl. Prapatan No. 10 RT. 26 Balikpapan.</h5> 
    <h5>Balikpapan, Indonesia</h5>
    <h5><span class="fa fa-phone"></span> (0542) 411237</h5>
    <h5><span class="fa fa-fax"></span> (0542) 411237</h5>
    <h5><span class="fa fa-envelope"></span> (0542) 411237</h5>
  </div>
</div>

@endsection
