@extends('main')
@section('title','Grocery Store a Ecommerce Online Shopping Category Flat')
@section('content')
  <div class="product">

  			<div class="container">
  				<div class="mid-popular">
            @foreach ($san_pham_theo_ma_loai as $sp)
              <div class="col-md-3 item-grid1 simpleCart_shelfItem">
                <div class=" mid-pop">
                  <div class="pro-img">
                    <img src="../images/san_pham/{{$sp->hinh}}" class="img-responsive hinh" alt="">
                      <div class="zoom-icon ">

                        <a href="single.html"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                      </div>
                </div>
                <div class="mid-1">
                <div class="women limit_line">
                  <h6><a href="single.html">{{$sp->ten_sp}}</a></h6>
                  <div class="clearfix"></div>
                  </div>
                  <div class="mid-2">
                    <p ><label>{{number_format($sp->don_gia)}} đ</label><em class="item_price">{{number_format($sp->don_gia_khuyen_mai)}} đ</em></p>
                      <div class="block">
                      <div class="starbox small ghosting"> </div>
                    </div>

                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
    					</div>
            @endforeach




  					<div class="clearfix"></div>
  				</div>
  			</div>



@endsection
