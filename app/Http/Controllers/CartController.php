<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\SanPhamModel;
use Cart;


class CartController extends Controller
{
  public function Add(Request $request,$ma_sp){
    $sl= $request->so_luong;
    $san_phams=\Response::json(SanPhamModel::ChiTietSP($ma_sp))->getData();
    Cart::add($ma_sp, $san_phams->ten_sp, $sl, $san_phams->don_gia);
    return back();
  }
  public function Xoa($rowID){
    Cart::remove($rowID);
      return back();
  }
  public function Update(Request $request,$rowID){
      Cart::update($rowID,$request->qty);
      return back();
  }

}


 ?>
