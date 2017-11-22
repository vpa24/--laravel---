@extends('main')
@section('title','Giỏ Hàng')
@section('content')
  @if (Cart::count()==0)
    Chưa có giỏ hàng
  @else
    @php
      $tong=0;
    @endphp
    <div class="check-out">
    <div class="container">

    	<div class="bs-example4" data-example-id="simple-responsive-table">
        <div class="table-responsive">
        	    <table class="table-heading simpleCart_shelfItem">
    		  <tr>
    			<th class="table-grid">Sản Phẩm</th>

    			<th>Đơn giá</th>
    			<th >Số lượng </th>
    			<th>Tổng</th>
          <th>Xóa</th>
          <th>Cập nhập</th>
    		  </tr>
          @foreach (Cart::content() as $cart)
            <tr class="cart-header">
              <td>
                  <h4 class="ten_sp"><a href="{{route('chi_tiet',[$cart->id])}}">{{$cart->name}}</a></h4>
              </td>
           <td>{{number_format($cart->price)}} đ</td>
           <td>
          		 <div class="quantity">
   								<div class="quantity-select">
              {{ Form::open(['action' => ['CartController@Update',$cart->rowId],'method'=>'put']) }}
   									<div class="entry value-minus" id="giam_{{$cart->rowId}}">&nbsp;</div>
   									<div class="so_luong"><input type="text" class="entry value item_quantity_" id="qty_{{$cart->rowId}}" name="qty" value="{{$cart->qty}}" ></div>
   									<div class="entry value-plus active" id="tang_{{$cart->rowId}}">&nbsp;</div>
   								</div>
   							</div></td>
            <td class="item_price">{{number_format($cart->subtotal)}} đ</td>
           <td>
                <a href="{{route('xoa',[$cart->rowId])}}"><div class="close1"> </div></a>

           </td>
           <td>
             {{Form::submit('Cập nhập',['class'=>'btn_cap_nhap'])}}
           </td>
           {{Form::close()}}
            </tr>

            @php
              $tong+=$cart->subtotal;
            @endphp
          @endforeach



    	</table>
    	</div>
    	</div>
      <div class="tong_cong">
        <h3>Tổng cộng: <span class="tong_tien">{{number_format($tong)}} đ</span></h3>
      </div>

    	<div class="produced">
    	<a href="{{route('dat_hang')}}" class="hvr-skew-backward">Tiến hành đặt hàng</a>
    	 </div>
    </div>
    </div>
  @endif

@endsection
