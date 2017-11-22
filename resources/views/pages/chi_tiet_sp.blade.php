@extends('main')
@section('title',$chi_tiet_sp->ten_sp)
@section('content')

  <div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">
		<div class="flexslider">
			   <div class="thumb-image hinh_chi_tiet"> <img id="zoom_08" src="../images/san_pham/{{$chi_tiet_sp->hinh}}" data-zoom-image="../images/san_pham/{{$chi_tiet_sp->hinh}}" class="img-responsive"> </div>
		</div>
	</div>
<div class="col-md-7 single-top-in">
						<div class="span_2_of_a1 simpleCart_shelfItem">
				<h2>{{$chi_tiet_sp->ten_sp}}</h2>
        <h4 class="thuong_hieu">Tên thương hiệu:
            <a href="/thuong_hieu/{{$chi_tiet_sp->ma_thuong_hieu}}" class="ten_thuong_hieu">{{$chi_tiet_sp->ten_thuong_hieu}}</a>
        </h4>
				  <div class="price_single">
				Đơn giá:  <span class="reducedfrom item_price">{{number_format($chi_tiet_sp->don_gia_khuyen_mai)}} đ</span>

				 <div class="clearfix"></div>
				</div>

              {{ Form::open(['action' => ['CartController@Add',$chi_tiet_sp->ma_sp],'method'=>'put']) }}
				 <div class="quantity">
								<div class="quantity-select">
									<div class="entry value-minus" id="giam">&nbsp;</div>
									<div class="so_luong"><input type="text" class="entry value item_quantity_" name="so_luong" value="1" id="sl_{{$chi_tiet_sp->ma_sp}}"></div>
									<div class="entry value-plus active" id="tang">&nbsp;</div>
								</div>
							</div>
							<!--quantity-->
                 {{Form::submit('Thêm vào giỏ hàng',['class'=>'add-to item_add hvr-skew-backward'])}}
{{Form::close()}}
			<div class="clearfix"> </div>
			</div>

					</div>
			<div class="clearfix"> </div>
			<!---->
			<div class="tab-head">
        <h2 class="tieu_de">Chi tiết sản phẩm</h2>
        <h3 class="ten_sp">{{$chi_tiet_sp->ten_sp}}</h3>
        <div class="chi_tiet_sp">
          {{$chi_tiet_sp->noi_dung_chi_tiet}}
        </div>
  </div>
			<!---->
</div>
<!----->

		</div>
		<div class="clearfix"> </div>
	</div>

			<!--brand-->

			<!--//brand-->
		</div>
@endsection
