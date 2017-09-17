@extends('main')
@section('title','Grocery Store a Ecommerce Online Shopping Category Flat')
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
