<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="index.html">
					@isset($ds_san_pham)
						<img src="images/logo.png" alt=""></a>
					@endisset
						<img src="../images/logo.png" alt=""></a>
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
						@if (Auth::guest())
								<li><a href="{{ route('login') }}">Đăng nhập</a></li>
								<li><a href="{{ route('register') }}">Đăng kí</a></li>
						@else
								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
												{{ Auth::user()->name }}
										</a>


												<li>
														<a href="{{ route('logout') }}"
																onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
																Đăng xuất
														</a>

														<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																{{ csrf_field() }}
														</form>
												</li>

								</li>
						@endif
						<li><a href="{{route('don_hang')}}">Đơn Hàng</a></li>
					</ul>
				</div>

			<div class="col-sm-5 header-social">
					<ul >
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
						<li><a href="#"><i class="ic4"></i></a></li>
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
            <li><a class="color" href="{{URL::to('/')}}">Trang chủ</a></li>

    		<li class="dropdown mega-dropdown active">
			    <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Thực Phẩm<span class="caret"></span></a>
				<div class="dropdown-menu ">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Đồ tươi sống</h4>
									<ul>
										<li><a href="/loai-san-pham/1">Rau - Củ - Quả</a></li>
										<li><a href="/loai-san-pham/4">Hải Sản</a></li>
										<li><a href="/loai-san-pham/3">Đậu Hủ</a></li>
										<li><a href="/loai-san-pham/5">Thịt</a></li>

									</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bơ - Sữa</h4>
								<ul>
										<li><a href="/loai-san-pham/9">Sữa Nước</a></li>
										<li><a href="/loai-san-pham/11">Phô Mai</a></li>
										<li><a href="/loai-san-pham/12">Sữa Chua</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Đồ Uống</h4>
									<ul>
										<li><a href="/loai-san-pham/30">Nước Ngọt</a></li>
										<li><a href="/loai-san-pham/31">Nước Suối</a></li>
									</ul>

							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Thực Phẩm khô</h4>
								<ul>
									<li><a href="/loai-san-pham/46">Mì Ăn Liền</a></li>
									<li><a href="/loai-san-pham/21">Đường</a></li>
									<li><a href="/loai-san-pham/44">Gia Vị</a></li>
									<li><a href="/loai-san-pham/23">Dầu Ăn</a></li>
								</ul>
							</div>
						</div>
						<div class="col1 col5">
							@isset($ds_san_pham)
								<img src="images/thuc-pham-chuc-nang.jpg" class="img-responsive fix" alt="">
							@endisset
							<img src="../images/thuc-pham-chuc-nang.jpg" class="img-responsive fix" alt="">
						<div>
						<div class="clearfix"></div>
					</div>
				</div>
			</li>
			<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Gia đình<span class="caret"></span></a>
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Áo Quần </h4>
									<ul>
										<li><a href="/loai-san-pham/36">Bột Giặt</a></li>
										<li><a href="/loai-san-pham/37">Nước Giặt</a></li>
										<li><a href="/loai-san-pham/43">Nước Xả Vải</a></li>
									</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bánh - Kẹo</h4>
								<ul>
										<li><a href="/loai-san-pham/25">Bánh</a></li>
										<li><a href="/loai-san-pham/26">Kẹo</a></li>
									</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Nhà Cửa</h4>
									<ul>
										<li><a href="/loai-san-pham/48">Nước Lau Sàn</a></li>
										<li><a href="/loai-san-pham/49">Nước Lau Kính</a></li>


									</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Đồ Dùng</h4>
								<ul>
									<li><a href="/loai-san-pham/50">Bàn Chải</a></li>
									<li><a href="/loai-san-pham/51">Kem Đánh Răng</a></li>
									<li><a href="/loai-san-pham/52">Sữa Tắm</a></li>
									<li><a href="/loai-san-pham/53">Dầu Gội</a></li>
								</ul>
							</div>
						</div>
						<div class="col1 col5">
							@isset($ds_san_pham)
								<img src="images/1dsp-20160207-sh004.png" class="img-responsive" alt="">
							@endisset()
							<img src="../images/1dsp-20160207-sh004.png" class="img-responsive" alt="">


						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</li>
			<li><a class="color3" href="/giam-gia">Giảm Giá</a></li>
			<li><a class="color4" href="/san-pham-moi">Sản Phẩm Mới</a></li>

            <li ><a class="color6" href="contact.html">Liên Hệ</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				<li>
				<a href="wishlist.html" >
				<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
				</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
					</ul>
					<div class="cart box_1">
						<a href="{{url('/gio_hang')}}">
						<h3> Giỏ hàng<div class="total">

							@isset($ds_san_pham)
								<img src="images/cart.png" alt="" class="cart_img"/></h3>
							@endisset
							<img src="../images/cart.png" alt="" class="cart_img"/></h3>
						</a>


					</div>
					<div class="clearfix"> </div>

						<!----->

						<!---pop-up-box---->
			<link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all"/>
			<script src="{{asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login-search">
						<input type="submit" value="">
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
					</div>
					<p>Shopin</p>
				</div>
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});

			});
		</script>
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
