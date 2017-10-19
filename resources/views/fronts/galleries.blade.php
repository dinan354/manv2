@extends('layouts.app')

@section('title', 'Gallery')
@section('keywords', 'Gallery MAN Balikpapan')
@section('breadcrumbs')
    <div class="container">
        <div class="row">
            <div class="breadcrumb clearfix">
                <ul>
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
                    <li class="active">Gallery</li>
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
        <h1>Gallery</h1>
    </div>
@stop

@section('content')
    <div class="col-md-12">
        <div id="filtering">
            <ul>
                <li><a class="btn btn-sm btn-default" href="#" data-filter="*"><i class="entypo-picture"></i> All photos</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div id="portfolio-filtering">
            <div class="col-md-3 col-sm-6 col-xs-12 cat1">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/sitiakbari.png') }}" data-rel="prettyPhoto[portfolio]"><img class="img-responsive" src="{{ asset('web/images/sitiakbari.png') }}" alt="Gallery Item" /><span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Sitti Akbari, S.Pd</h4>
                        <div class="date-captured">NIP : 19680520 200501 2 007</div>
                        <p>Guru Bahas Inggris</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat1 cat3">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/antung.png') }}" data-rel="prettyPhoto"><img src="{{ asset('web/images/antung.png') }}" alt="Gallery Item" /> <span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Antung Sobri Fattah, S.Ag</h4>
                        <div class="date-captured">197402222003121000</div>
                        <p>Kepala Lab / Guru Bahasa Arab</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat1 cat3">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/muslim.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/muslim.png') }}" alt="Gallery Item"/> <span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Drs. Muslim</h4>
                        <div class="date-captured">196607172005011000</div>
                        <p>Guru Bahasa Arab</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat1 cat2 cat3">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/ruslan.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/ruslan.png') }}" alt="Gallery Item"/> <span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Drs. Ruslan Hamzah</h4>
                        <div class="date-captured">196505252003121000</div>
                        <p>Guru Kimia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat1 cat2">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/towilah.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/towilah.png') }}" alt="Gallery Item"/><span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Dra. Towilah</h4>
                        <div class="date-captured">196801281997032000</div>
                        <p>Guru Bahasa Inggris</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat2 cat3">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/niswah.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/niswah.png') }}" alt="Gallery Item"/><span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Niswah Latif, S.Ag</h4>
                        <div class="date-captured">197104141997032000</div>
                        <p>Kepala Perpustakaan/Guru Biologi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat2 cat3">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/nursiah.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/nursiah.png') }}" alt="Gallery Item"/><span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Dra. Nursiah, MM</h4>
                        <div class="date-captured">196712232006042000</div>
                        <p>Guru PKn</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat1 cat3 cat2">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/sitis.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/sitis.png') }}" alt="Gallery Item"/><span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Sitti Syarifah, S.Pd.</h4>
                        <div class="date-captured">19660926 200501 2 002</div>
                        <p>Guru Kimia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat2 cat2">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/sumarni.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/sumarni.png') }}" alt="Gallery Item"/><span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Dra. Sumarni</h4>
                        <div class="date-captured">19700201 199703 2 002</div>
                        <p>Guru SKI</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat3 cat2">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/noriyati.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/noriyati.png') }}" alt="Gallery Item"/><span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Noriyanti, S.Pd</h4>
                        <div class="date-captured">19800903 200501 2 011</div>
                        <p>Guru Bahasa Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat1 cat2">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/idris.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/idris.png') }}" alt="Gallery Item"/><span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Muhammad Idris, S.Pd</h4>
                        <div class="date-captured">19800918 200501 1 005</div>
                        <p>Guru Ekonomi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat3 cat1">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/ghufron.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/ghufron.png') }}" alt="Gallery Item"/><span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Muhammad Ghufron, S.Ag, S.Pd</h4>
                        <div class="date-captured">19680311 199603 1 001</div>
                        <p>Waka Kesiswaan / Guru Fiqih</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat3 cat1">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/arpiah.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/arpiah.png') }}" alt="Gallery Item"/><span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Arpiah, S.Pd</h4>
                        <div class="date-captured">197610252002122000</div>
                        <p>Guru Matematika</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat3 cat1">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/cahaya.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/cahaya.png') }}" alt="Gallery Item"/><span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Cahaya, S.Pd</h4>
                        <div class="date-captured">196807122005012000</div>
                        <p>Guru PKn</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 cat3 cat1">
                <div class="thumbnail">
                    <div class="hover-fader"> <a href="{{ asset('web/images/alif.png') }}" data-rel="prettyPhoto[portfolio]"><img src="{{ asset('web/images/alif.png') }}" alt="Gallery Item"/><span class='zoom'><i class='fa fa-search-plus'></i></span></a></div>
                    <div class="caption">
                        <h4>Alif Romawati</h4>
                        <div class="date-captured">197904162005012000</div>
                        <p>Guru Fisika</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('plugins')
        <!--PrettyPhoto-->
    <script type="text/javascript" src="{{ asset('web/js/vendors/pretty-photo/jquery.prettyPhoto.js')  }}"></script>
    <script>
        //PrettyPhoto Init
        $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
        });
        //Fixing Pretty Photo Validation Fail
        $('a[data-rel]').each(function() {
            $(this).attr('rel', $(this).data('rel'));
        });
    </script>
    <!--Isotope Filtering-->
    <script type="text/javascript" src="{{ asset('web/js/vendors/jquery-isotope/jquery.isotope.min.js') }}"></script>
@stop