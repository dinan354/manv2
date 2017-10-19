@extends('layouts.app')
@section('title', 'About Us')
@section('keywords', 'About MAN Balikpapan')
@section('breadcrumbs')
<div class="container">
<div class="row">
      <div class="breadcrumb clearfix">
        <ul>
          <li><a href="./"><i class="fa fa-home"></i></a></li>
          <li class="active">Tentang Kami</li>
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
        <h1>Tentang Kami <small>Who we are</small></h1>
  </div>
@endsection
@section('content')
<div class="col-md-12">
  <div class="header-splash-img">
          <div class="header-splash-intro">
            <h1>MAN Balikpapan</h1>
            <p>Description of MAN BALIKPAPAN</p>
          </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="scissors-block">
    <h1 class="text-center">Visi</h1>
      <p class="text-justify">
        Visi Madrasah Aliyah Negeri Balikpapan sebagai berikut.
        Terwujudnya Cerdas dan Berakhlak karimah dalam lingkungan bersih, hijau dan sehat.
        Untuk mencapai visi tersebut diperlukan action atau kegiatan yang terencana dan berkesinambungan sampai pada tahun yang ditentukan, dan itu semua dalam bentuk misi.
        </p>

      </div>
  </div>

  <div class="col-md-6">
    <div class="scissors-block">
    <h1 class="text-center">Misi</h1>
    <p>Misi Madrasah Aliyah Negeri Balikpapan dalam rangka merealisasikan misinya sebagai berikut.</p>
      <p class="text-left">

        <ol>
          <li>Memberikan pelayanan prima pendidikan yang mengacu pada KTSP (Kurikulum Tingkat Satuan Pendidikan Berbasis Karakter Bangsa) dan PAI mengacu pada kurikulum 2013</li>
          <li>Memacu siswa untuk berkompetisi dalam mengembangkan multiple intelegents (beragam kercerdasan) yang komprehensif.</li>
          <li>Menciptakan kultur budaya yang islami yang diterapkan dalam praktek kehidupan sehari hari</li>
          <li>Menerapkan nilai-nilai akhlaqul karimah pada siswa siswi melalui keteladanan/uswatun hasanah yang diperankan oleh guru dalam kehidupan sehari-hari </li>
          <li>Bersama orang tua dan masyarakat menciptakan lingkungan madrasah yang Clean, Glean and Healty, serta kondusif untuk mendukung terwujudnya peserta didik yang beriman, berilmu dan berakhlakul karimah</li>
        </ol>
        </p>

      </div>
  </div>
</div>

@endsection
