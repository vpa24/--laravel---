<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\KhachHangModel;
use App\Don_HangModel;
use App\ChiTietDonHangModel;
use App\User;
use Redirect;
use Cart;
class KhachHangController extends Controller
{
    public function DatHang(){
      $khach_hang="";
      if(isset(Auth::user()->id)){
          $id=Auth::user()->id;
          $khach_hang=KhachHangModel::find($id);
      }
      return view('pages.dat_hang',['khach_hang'=>$khach_hang]);
    }
    public function ThucHienDatHang(Request $request)
    {
      //cap nhap khach hang
      $khachHang=KhachHangModel::find(Auth::id());
      $khachHang->name=$request->name;
      $khachHang->email=$request->email;
      $khachHang->phone=$request->phone;
      $khachHang->save();
      //them don hang
      $donHang=new Don_HangModel;
      $donHang->ma_khach_hang=Auth::id();
      $donHang->ngay_dat=Date('Y/m/d');
      $donHang->hinh_thuc_thanh_toan=$request->thanh_toan;
      $donHang->save();
      $sl=0;
      //them chi tiet gio hang

      foreach (Cart::content() as $cart) {
        $chiTietDonHang=new ChiTietDonHangModel;
        $chiTietDonHang->ma_sp=$cart->id;
        $chiTietDonHang->so_luong=$cart->qty;
        $chiTietDonHang->ma_don_hang=Don_HangModel::donHangCuoi()->ma_don_hang;
        $chiTietDonHang->save();
      }
      Cart::destroy();
    return view('pages.dat_hang_thanh_cong');
    }

    public function DonHang(){
      return "donhang";
    }

}
