@extends('main')
@section('title','Grocery Store a Ecommerce Online Shopping Category Flat')
@section('banner')
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
							<li><a href="products.html">Branded Foods</a></li>
							<li><a href="household.html">Households</a></li>
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>
								<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
									<div class="w3ls_vegetables">
										<ul>
											<li><a href="vegetables.html">Vegetables</a></li>
											<li><a href="vegetables.html">Fruits</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="kitchen.html">Kitchen</a></li>
							<li><a href="short-codes.html">Short Codes</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
								<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
									<div class="w3ls_vegetables">
										<ul>
											<li><a href="drinks.html">Soft Drinks</a></li>
											<li><a href="drinks.html">Juices</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="pet.html">Pet Food</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
								<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
									<div class="w3ls_vegetables">
										<ul>
											<li><a href="frozen.html">Frozen Snacks</a></li>
											<li><a href="frozen.html">Frozen Nonveg</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="bread.html">Bread & Bakery</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
			<div class="w3l_banner_nav_right">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3l_banner_nav_right_banner">
									<h3>Make your <span>food</span> with Spicy.</h3>
									<div class="more">
										<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
									</div>
								</div>
							</li>
							<li>
								<div class="w3l_banner_nav_right_banner1">
									<h3>Make your <span>food</span> with Spicy.</h3>
									<div class="more">
										<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
									</div>
								</div>
							</li>
							<li>
								<div class="w3l_banner_nav_right_banner2">
									<h3>upto <i>50%</i> off.</h3>
									<div class="more">
										<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- flexSlider -->
					<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
					<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
					<script type="text/javascript">
					$(window).load(function(){
					$('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						$('body').removeClass('loading');
						}
					});
					});
				</script>
				<!-- //flexSlider -->
			</div>
			<div class="clearfix"></div>
		</div>
@endsection
@section('content')
    	<div class="top-brands">
		<div class="container">
			<h3>Bán Chạy</h3>
			<div class="agile_top_brands_grids">
			@foreach($users as $mang)


				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
											<a href="single.html"><img title=" " alt=" "class="hinh" src="images/san_pham/{!! $mang->hinh !!}"  /></a>
											<p >{!!$mang->ten_sp!!}</p>
											<h4><?php echo number_format($mang->don_gia_khuyen_mai)?> đ <span><?php echo number_format($mang->don_gia)?> đ</span></h4>
										</div>
									
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

			@endforeach
				<div class="clearfix"> </div>
			</div>
		</div>

	</div>


@endsection
