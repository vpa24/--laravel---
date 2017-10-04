<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\m_san_pham;
use App\BannerModel;

class San_PhamController extends Controller
{
  public function Hien_thi_san_pham_theo_ma_loai($ma_loai){
    $san_phams=m_san_pham::join('loai_sp','san_pham.ma_loai','=','loai_sp.ma_loai')
              ->join('nhom_loai_sp','loai_sp.ma_nhom_loai','=','nhom_loai_sp.ma_nhom_loai')
              ->where('san_pham.ma_loai', $ma_loai)->paginate(8);
    return view('pages.san_pham_theo_ma_loai', ['san_pham_theo_ma_loai' => $san_phams]);
  }
  public function Giam_gia(){
    $giam_gia=m_san_pham::orderBy('don_gia','-','don_gia_khuyen_mai','desc')->limit(12)->get();
    return view('pages.giam_gia',['giam'=>$giam_gia]);
  }
  public function Moi(){
    $moi=m_san_pham::orderBy('ma_loai','desc')->limit(12)->get();
    return view('pages.san_pham_moi',['sp_moi'=>$moi]);
  }
  public function ChiTietSP($ma_sp){
    $chi_tiet=m_san_pham::join('thuong_hieu','thuong_hieu.ma_thuong_hieu','=','san_pham.ma_thuong_hieu')->where('ma_sp',$ma_sp)->first();
    return view('pages.chi_tiet_sp',['chi_tiet_sp'=>$chi_tiet]);
    }
  public function ThuongHieu($ma_thuong_hieu){
      $thuong_hieu=m_san_pham::join('thuong_hieu','thuong_hieu.ma_thuong_hieu','=','san_pham.ma_thuong_hieu')->where('san_pham.ma_thuong_hieu',$ma_thuong_hieu)->paginate(8);
      return view('pages.san_pham_cung_thuong_hieu',['thuong_hieus'=>$thuong_hieu]);
  }
}


 ?>
