<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	@yield('title')
	<link href="{{ asset('interface/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="{{ asset('interface/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--theme-style-->
	<link href="{{ asset('interface/css/style4.css') }}" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->
	<script src="{{ asset('interface/js/jquery.min.js') }}"></script>
	<!--- start-rate---->
	<script src="{{ asset('interface/js/jstarbox.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('interface/css/jstarbox.css') }}" type="text/css" media="screen" charset="utf-8" />
	<script type="text/javascript">
		jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
				starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
				}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
						var val = Math.random();
						starbox.next().text(' '+val);
						return val;
					} 
				})
			});
		});
	</script>
	<!---//End-rate---->
	<link href="{{ asset('interface/css/form.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="head">
				<div class=" logo">
					<a href="{{ url('products') }}"><img src="{{ asset('interface/images/logo.png') }}" alt=""></a>	
				</div>
			</div>
		</div>
		<div class="header-top">
			<div class="container">
				<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
					<!-- login part -->
					@if (Auth::check())
						<li><a>Welcome, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a></li>
						<li>
							<a href="{{ url('/logout') }}" 
								onclick="event.preventDefault();
	                         	document.getElementById('logout-form').submit();">
	                         	<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	               				{{ csrf_field() }}
	            				</form>
	            				Logout
            				</a>
                        </li>
					@elseif(Auth::guest())
						<li><a href="{{ url('/login') }}">Login</a></li>
						<li><a href="{{ url('/register')}}">Register</a></li>
					@endif
					</ul>
				</div>
				
				<div class="col-sm-5 header-social">		
					<ul >
						<li></li>
					</ul>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="container">

			<div class="head-top">

				<div class="col-sm-8 col-md-offset-2 h_menu4">
					<nav class="navbar nav_bottom" role="navigation">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header nav_2">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						</div> 
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav nav_1">
								<li><a class="color3" href="{{ url('/products') }}">Products</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->

					</nav>
				</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
@yield('content')
<!--//footer-->
<div class="footer">
	<div class="footer-bottom">
		<div class="container">
			<ul class="footer-bottom-top">
				<li><a href="#"><img src="images/f1.png" class="img-responsive" alt=""></a></li>
				<li><a href="#"><img src="images/f2.png" class="img-responsive" alt=""></a></li>
				<li><a href="#"><img src="images/f3.png" class="img-responsive" alt=""></a></li>
			</ul>
			<p class="footer-class">&copy; 2017 TestApp. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--//footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="{{ asset('interface/js/simpleCart.min.js') }}"> </script>
<!-- slide -->
<script src="{{ asset('interface/js/bootstrap.min.js') }}"></script>
<!--light-box-files -->
<script src="{{ asset('interface/js/jquery.chocolat.js') }}"></script>
<link rel="stylesheet" href="{{ asset('interface/css/chocolat.css') }}" type="text/css" media="screen" charset="utf-8">
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('a.picture').Chocolat();
	});
</script>
</body>
</html>