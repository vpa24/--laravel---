<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class SanPhamModel extends Model
{
    protected $table = 'san_pham';
    public static function SanPhamBanChay(){
      return DB::table('san_pham')->join('chi_tiet_don_hang','san_pham.ma_sp','=','chi_tiet_don_hang.ma_sp')
                      ->join('don_hang','chi_tiet_don_hang.ma_don_hang','=','don_hang.ma_don_hang')
                      ->whereMonth('ngay_dat',11)
                      ->limit(12)
                      ->get();
    }
    public static function ChiTietSP($ma_sp){
       return DB::table('san_pham')->join('thuong_hieu','thuong_hieu.ma_thuong_hieu','=','san_pham.ma_thuong_hieu')->where('ma_sp',$ma_sp)->first();
    }
    public static function ThuongHieu($ma_thuong_hieu){
      return DB::table('san_pham')->join('thuong_hieu','thuong_hieu.ma_thuong_hieu','=','san_pham.ma_thuong_hieu')->where('san_pham.ma_thuong_hieu',$ma_thuong_hieu)->paginate(8);
    }
    public static function SanPhamMoi(){
      return DB::table('san_pham')->orderBy('ma_loai','desc')->limit(12)->get();
    }
    public static function GiamGia(){
      return DB::table('san_pham')->orderBy('don_gia','-','don_gia_khuyen_mai','desc')->limit(12)->get();
    }
    public static function SanPhamTheoMaLoai($ma_loai){
      return DB::table('san_pham')->join('loai_sp','san_pham.ma_loai','=','loai_sp.ma_loai')
                ->join('nhom_loai_sp','loai_sp.ma_nhom_loai','=','nhom_loai_sp.ma_nhom_loai')
                ->where('san_pham.ma_loai', $ma_loai)->paginate(8);
    }

}
