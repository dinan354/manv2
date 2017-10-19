<li><a href="{{ url('/') }}">Home</a></li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{ url('/') }}/about-us">About Us</a></li>
    <li><a href="{{ url('/') }}/blog">Blog</a></li>
    <li><a href="{{ url('/') }}/guru">Guru</a></li>
  </ul>
</li>
<li><a href="{{ url('/news') }}">News</a></li>
<li><a href="" data-toggle="dropdown">Gallery <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{ url('/galleries') }}">Lists</a></li>
  </ul>
</li>
<li><a href="http://e-learning.man-balikpapan.sch.id/login" target="_blank">E-Learning</a></li>
@if( (isset($active) && $active == 'contact') or (isset($active) && $active == 'faq'))
<li class="dropdown active"><a href="" data-toggle="dropdown"> Contact <span class="caret"></span> </a>
	<ul class="dropdown-menu" role="menu">
	    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
	    <li><a href="{{ url('/faq') }}">FAQ</a></li>
	</ul>
</li>
@else 
<li class="dropdown"><a href="" data-toggle="dropdown"> Contact <span class="caret"></span> </a>
	<ul class="dropdown-menu" role="menu">
	    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
	    <li><a href="{{ url('/faq') }}">FAQ</a></li>
	</ul>
</li>
@endif
<li class="dropdown"><a href="" data-toggle="dropdown"> Kemenag <span class="caret"></span> </a>
	<ul class="dropdown-menu" role="menu">
	    <li><a href="http://kemenag.go.id/" target="_blank">Kemenag Pusat</a></li>
	    <li><a href="http://kaltim.kemenag.go.id/" target="_blank">Kemenag Kaltim</a></li>
	</ul>
</li>