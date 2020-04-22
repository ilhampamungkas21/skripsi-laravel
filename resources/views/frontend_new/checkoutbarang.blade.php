
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
<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //font-awesome icons -->

<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

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
				<li>Checkout</li>
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
<!-- about -->
		<div class="privacy about">
			<h3>Chec<span>kout</span></h3>

	      <div class="checkout-right">
					<h4>Your shopping cart contains: <span>3 Products</span></h4>
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>ID Barang.</th>
							<th>Produk</th>
							<th>Nama Barang</th>
							<th>Minimal Order</th>
							<th>Harga Per Kg</th>
							<th>Penjual</th>

						</tr>
					</thead>
					<tbody>
					<tr class="rem1">
						<td class="invert">{{$barang -> id}}</td>
						<td><a href="single.html"><img src="{{asset('img/gambar_barang/' . $barang->gambar_barang )}}" alt=" " class="img-responsive" width="50" height="50"></a></td>

						<td class="invert">{{$barang -> nama_barang}}</td>
						<td class="invert">{{$barang -> moq}}</td>
						<td class="invert">{{$barang -> harga_barang}}</td>
						<td class="invert">{{$barang -> user -> name}}</td>

					</tr>



				</tbody></table>
			</div>
			<div class="checkout-left">
				<div class="col-md-4 checkout-left-basket">
					<h4>Wajib di ISI</h4>
					<ul>
						<li> Harga Per Kg <i>-</i> <span> <input type="text" id="angka1" value="{{$barang -> harga_barang}}"> </span></li>
						<li>Order sebanyak  <i>-</i> <span> <input type="text" id="angka2" value=""> </span></li>
						<li> Ongkos Kirim <i>-</i> <span>~</span></li>
						<li >Total Pembayaran (Rp) <i>-</i> <span> <p id="hasilnya"></p> </span></li>



						<button onclick="tambah()">Jumlah</button>

						<script>
						function tambah() {
						    var a=document.getElementById("angka1").value;
						    var b=document.getElementById("angka2").value;
						    var hasil = a*b;
								document.getElementById("hasilnya").innerHTML = hasil;
								document.getElementById("totalharga").value = hasil;

						}
						</script>



					</ul>
				</div>
				<div class="col-md-8 address_form_agile">
					  <h4>Alamat anda</h4>




				<form action="/deskripsibarang/checkoutbarang/pembayaranbarang/{id}" method="POST"  class="creditly-card-form agileinfo_form">
									{!! csrf_field() !!}
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">





												<div class="controls">
													<label class="control-label">Id Barang</label>
													<input class="billing-address-name form-control" type="text" name="id_barang" placeholder="Nama" value="{{$barang -> id}}" readonly>
												</div>
												<div class="controls">
													<label class="control-label">Nama Pemesan </label>
													<input class="billing-address-name form-control" type="text" name="nama_penerima" placeholder="Nama" value="" required>
												</div>



												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Nomor Telepon Pembeli: </label>
														    <input class="form-control" type="text" placeholder="Nomor Telepon Pemesan" name="telepon_pemesan" value="{{Auth::user()->telp}}" readonly>
														</div>

														<div class="controls">
															<label class="control-label">Nomor Telepon Penjual: </label>
																<input class="form-control" type="text" placeholder="Nomor Telepon Pemesan" name="telepon_penjual" value="{{$barang -> user -> telp}}" readonly>
														</div>


														<div class="controls">
															<label class="control-label">Total Harga </label>
															<input class="billing-address-name form-control" type="text" name="totalharga" placeholder="selesaikan form jumlah diatas terlebih dahulu"  id="totalharga" required>
														</div>

														<div class="controls">
															<label class="control-label">Nama Barang </label>
															<input class="billing-address-name form-control" type="text" name="nama_barang" value="{{$barang -> nama_barang}}" readonly>
														</div>



													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
																<label class="control-label"> Alamat Yang dituju </label>
														 <input class="form-control" type="text" placeholder="Alamat" name="alamat_penerima" required>
														</div>
													</div>
													<div class="clear"> </div>
												</div>
											</div>
											<a href="informasipembayaran.html">
												<button class="submit check_out">Lanjut Pembayaran</button>
											</a>

										</div>
									</section>
								</form>


			      	</div>
					</div>

				<div class="clearfix"> </div>

			</div>

		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->


<!-- newsletter -->

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
<!-- js -->
<script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
							 <!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
							<script>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});
								});
						   </script>
							<script>$(document).ready(function(c) {
								$('.close2').on('click', function(c){
									$('.rem2').fadeOut('slow', function(c){
										$('.rem2').remove();
									});
									});
								});
						   </script>
						  	<script>$(document).ready(function(c) {
								$('.close3').on('click', function(c){
									$('.rem3').fadeOut('slow', function(c){
										$('.rem3').remove();
									});
									});
								});
						   </script>

<!-- //js -->
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
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/easing.js  ')}}"   ></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
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
<script src="{{asset('frontend/js/minicart.js')}}"></script>
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
