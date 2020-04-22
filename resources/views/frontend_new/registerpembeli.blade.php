<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Toko Beras</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="frontend/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="frontend/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="frontend/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<!-- //font-awesome icons -->
<!-- js -->
<script src="frontend/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="frontend/js/move-top.js"></script>
<script type="text/javascript" src="frontend/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
<div class="agileits_header">
	<div class="w3l_offers">
		<a href="{{url('daftarproduk.html')}}">Kapan Lagi Belanja Murah !</a>
	</div>

	<div class="w3l_header_right1">
		<ul>
			<li class="dropdown profile_details_drop">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
				<div class="mega-dropdown-menu">
					<div class="w3ls_vegetables">
						<ul class="dropdown-menu drp-mnu">
							@if (Auth::check())
								<li><a href="{{url('logoutpembeli')}}">logout</a></li>
							@endif

							@if(Auth::guest())
							<li><a href="{{url('registerpembeli.html')}}">Register Pembeli / Login</a></li>
							<li><a href="{{url('register')}}">Register Penjual</a></li>
							@endif

						</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="w3l_header_right1">
		<h2>
			<a href="">
				 @if(Auth::user())
					{{ Auth::user()->name }}
				 @endif

				 @if(Auth::guest())
						Belum Login
				 @endif
			</a>
		</h2>
	</div>
	<div class="clearfix"> </div>
</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop();
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });

	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="{{url('/')}}"><span>Toko</span> Beras</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="{{url('daftarproduk.html')}}">Daftar Beras</a></li>
					<li><a href="{{url('tentang.html')}}">Tentang Kami</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">

				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{url('/')}}">Home</a><span>|</span></li>
				<li>Register dan Login</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
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
						<li><a href="{{url('daftarproduk.html')}}">Daftar Beras</a></li>
						<li><a href="{{url('tentang.html')}}">Tentang Kami</a></li>

					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Klik Saya Bila mau login/register</div>
				  </div>
				  <div class="form">
						<h2>Buat Akun untuk membeli</h2>
						<form action="/registerpembeli" method="post">
	            {{ csrf_field() }}
						  <input type="text" name="name" placeholder="Name" required=" ">
						  <input type="password" name="password" placeholder="Password" required=" ">
						  <input type="text" name="telp" placeholder="Telepon" required=" ">
						  <input type="email" name="email" placeholder="Email" required=" ">
	            <input type="text" name="level" value="pembeli" placeholder="status anda sebagai"readonly required=" ">
						  <input type="submit" value="Register">
						</form>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="/loginpembeli" method="POST">
					{{ csrf_field() }}
					  <input type="email" name="email" placeholder="E-Mail" required=" ">
					  <input type="password" name="password" placeholder="Password" required=" ">
					  <input type="submit" value="Login">
					</form>
				  </div>
				  </div>

				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->

<!-- //newsletter -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 w3_footer_grid">
			<h3>information</h3>
			<ul class="w3_footer_grid_list">
				<li><a href="{{url('daftarproduk.html')}}">Daftar Beras</a></li>
				<li><a href="{{url('tentang.html')}}">Tentang Kami</a></li>
			</ul>
		</div>

		<div class="clearfix"> </div>

		<div class="wthree_footer_copy">
			<p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="frontend/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
<script src="frontend/js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>
