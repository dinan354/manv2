@extends('layouts.app')
@section('title', 'Home')
@section('keywords', 'Man Balikpapan')
@section('banner-override')
  <style type="text/css">
    <?php $bn_count = 0;?>
    @foreach($banner as $bn)
      .carousel-inner .man-{{ $bn_count+1 }} {
        background: #00abab url({{ url($bn->banner) }}) no-repeat !important;
        background-size: cover !important;
      }
      <?php $bn_count++;?>
    @endforeach
  </style>
@endsection
@section('carousel')
<div class="main-carousel">
  <!--Slider -->
  <div id="carousel-example-generic" class="carousel" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php $bn_count = 0;?>
      @foreach($banner as $bn)
        <li data-target="#carousel-example-generic" data-slide-to="{{ $bn_count }}"></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      <?php $bn_count = 0;?>
      @foreach($banner as $bn)
        
      <!--First Item-->
      @if($bn_count == 0)
        <div class="item man-{{ $bn_count+1}} active">
      @else
        <div class="item man-{{ $bn_count+1}}">
      @endif
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="caption">
                <h2 class="animated bounceInRight">{{ $bn->banner_title }}</h2><div class="clearfix"></div>
                <p class="animated fadeInUpBig">
                  {{ $bn->banner_text }}
                </p>
              </div>
            </div>
            <!-- <div class="col-md-4 visible-lg visible-md">
            <img class="animated fadeInRightBig" src="images/slider/1.png" alt="ORB">
          </div> -->
        </div>
      </div>
    </div>
    <!--/First Item-->
    <?php $bn_count++;?>
    @endforeach
</div>
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
</div>
@endsection


@section('content')

     <!--Facts-->
      
      <div class="factage-block block">
        <h2>Facts About Us</h2>
        <?php $fc = 0;?>
        @foreach($facts as $f)
          <?php $fc++;?>
          <!--Fact-->
          <div class="col-md-4">
            <div class="factage">
              <div class="factage-text-block">
                <p class="numbers">{{ $fc }}</p>
                <h3>{{ $f->title }}</h3>
                {{ $f->text}}</div>
              <div class="more-icon-wrap more-icon-hover more-icon-hover"> <a href="#" data-toggle="tooltip" data-placement="top" title="Know More!" class="more-icon more-icon-more tooltiped">Mobile</a> </div>
            </div>
          </div>
          <!--/Fact-->
        @endforeach
      </div>
      <div class="clearfix"></div>

      <!--/Facts-->

      <!--Process Block-->

      <div class="block process-block bg-grey">
        <h2>The process</h2>
        <h5>4 Steps for Success</h5>
        <div class="col-md-12">
          <div class="row">
            <ol class="process">
              <li class="col-md-3"> <i class="fa fa-car"></i>
                <h4>Come to Our School</h4>
                <p>Belajar dengan sungguh-sungguh (100%).</p>
              </li>
              <li class="col-md-3"> <i class="fa fa-lightbulb-o"></i>
                <h4>Lakukan dengan tuntas</h4>
                <p>Lakukanlah sampai tuntas ketika sudah memulainya.</p>
              </li>
              <li class="col-md-3"> <i class="fa fa-cogs"></i>
                <h4>Rasa Ingin Tahu</h4>
                <p>Hapuskan kata "<span style="color:red;"><b>I Know That</b></span>" jadilah seperti orang yang haus Ilmu, dan ingin selalu belajar.  </p>
              </li>
              <li class="col-md-3"> <i class="fa fa-thumbs-o-up"></i>
                <h4>Komitmen & Istiqomah</h4>
                <p>Lakukanlah dengan Komitmen dan Istiqomah. Hilangkan kata <span style="color:red;"><b>TAPI, JIKA</b></span> dan <span style="color:red;"><b>ALASAN</b></span> dari dalam diri kita.</p>
              </li>
            </ol>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <!--/Process Block-->
  
      <!--
      <div class="clients-block">
        <h2>World Famous Companies</h2>
        <div class="row">
          <div class="col-md-1 col-sm-3 col-xs-4">
            <div class="client-logo"><a href="#"><img class="img-responsive" src="http://placehold.it/600x600" alt="Client"></a></div>
          </div>
          <div class="col-md-1 col-sm-3 col-xs-4">
            <div class="client-logo"><a href="#"><img class="img-responsive" src="http://placehold.it/600x600" alt="Client"></a></div>
          </div>
          <div class="col-md-1 col-sm-3 col-xs-4">
            <div class="client-logo"><a href="#"><img class="img-responsive" src="http://placehold.it/600x600" alt="Client"></a></div>
          </div>
          <div class="col-md-1 col-sm-3 col-xs-4">
            <div class="client-logo"><a href="#"><img class="img-responsive" src="http://placehold.it/600x600" alt="Client"></a></div>
          </div>
          <div class="col-md-1 col-sm-3 col-xs-4">
            <div class="client-logo"><a href="#"><img class="img-responsive" src="http://placehold.it/600x600" alt="Client"></a></div>
          </div>
          <div class="col-md-1 col-sm-3 col-xs-4">
            <div class="client-logo"><a href="#"><img class="img-responsive" src="http://placehold.it/600x600" alt="Client"></a></div>
          </div>
          <div class="col-md-1 col-sm-3 col-xs-4">
            <div class="client-logo"><a href="#"><img class="img-responsive" src="http://placehold.it/600x600" alt="Client"></a></div>
          </div>
          <div class="col-md-1 col-sm-3 col-xs-4">
            <div class="client-logo"><a href="#"><img class="img-responsive" src="http://placehold.it/600x600" alt="Client"></a></div>
          </div>
          <div class="col-md-1 col-sm-3 col-xs-4">
            <div class="client-logo"><a href="#"><img class="img-responsive" src="http://placehold.it/600x600" alt="Client"></a></div>
          </div>
          <div class="col-md-1 col-sm-3 col-xs-4">
            <div class="client-logo"><a href="#"><img class="img-responsive" src="http://placehold.it/600x600" alt="Client"></a></div>
          </div>
          <div class="col-md-1 col-sm-3 col-xs-4">
            <div class="client-logo"><a href="#"><img class="img-responsive" src="http://placehold.it/600x600" alt="Client"></a></div>
          </div>
          <div class="col-md-1 col-sm-3 col-xs-4">
            <div class="client-logo"><a href="#"><img class="img-responsive" src="http://placehold.it/600x600" alt="Client"></a></div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!--/Clients-->

      <!--Latest Blog
      <div class="main-page-blog-posts block">
        <h2>Latest blog posts</h2>
        <!--Blog Post
        <div class="col-md-3 col-sm-6">
          <div class="blog-post-short"> <a href="blog-post.html"><img class="img-responsive" src="http://placehold.it/1024x768" alt="blog" /></a>
            <div class="blog-header">
              <!--Big Date
              <div class="blog-date"> <span class="month">may</span> <span class="day">18</span> <span class="year">2014</span> </div>
              <!--/Big Date
              <div class="page-header">
                <h3><a href="blog-post.html">Every designer have to design nice font</a></h3>
              </div>
              <div class="blog-info clearfix"> <a href="#">Funny Videos</a> By: <a href="#">Tolstoy</a> </div>
            </div>
          </div>
        </div>
        <!--/Blog Post-->

        <!--Blog Post
        <div class="col-md-3 col-sm-6">
          <div class="blog-post-short"> <a href="blog-post.html"><img class="img-responsive" src="http://placehold.it/1024x768" alt="blog" /></a>
            <div class="blog-header">
              <!--Big Date
              <div class="blog-date"> <span class="month">may</span> <span class="day">19</span> <span class="year">2014</span> </div>
              <!--/Big Date
              <div class="page-header">
                <h3><a href="blog-post.html">One more post, one more header</a></h3>
              </div>
              <div class="blog-info clearfix"> <a href="#">Funny Videos</a> By: <a href="#">Tolstoy</a> </div>
            </div>
          </div>
        </div>
        <!--/Blog Post

        <!--Blog Post
        <div class="col-md-3 col-sm-6">
          <div class="blog-post-short"> <a href="blog-post.html"><img class="img-responsive" src="http://placehold.it/1024x768" alt="blog" /></a>
            <div class="blog-header">
              <!--Big Date
              <div class="blog-date"> <span class="month">may</span> <span class="day">20</span> <span class="year">2014</span> </div>
              <!--/Big Date
              <div class="page-header">
                <h3><a href="blog-post.html">Curabitur aliquet libero ac enim interdum</a></h3>
              </div>
              <div class="blog-info clearfix"> <a href="#">Funny Videos</a> By: <a href="#">Tolstoy</a> </div>
            </div>
          </div>
        </div>
        <!--/Blog Post

        <!--Blog Post
        <div class="col-md-3 col-sm-6">
          <div class="blog-post-short"> <a href="blog-post.html"><img class="img-responsive" src="http://placehold.it/1024x768" alt="blog" /></a>
            <div class="blog-header">
              <!--Big Date
              <div class="blog-date"> <span class="month">may</span> <span class="day">21</span> <span class="year">2014</span> </div>
              <!--/Big Date
              <div class="page-header">
                <h3><a href="blog-post.html">Curabitur aliquet libero ac enim interdum</a></h3>
              </div>
              <div class="blog-info clearfix"> <a href="#">Funny Videos</a> By: <a href="#">Tolstoy</a> </div>
            </div>
          </div>
        </div>
        <!--/Blog Post

        <div class="clearfix"></div>
      </div>
      Latest Blog--> 

@endsection