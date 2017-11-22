<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\SanPhamModel;
use Symfony\Component\HttpFoundation\JsonResponse;

class San_PhamController extends Controller
{
  public function San_Pham_ban_Chay(){
    $ds_san_pham=SanPhamModel::SanPhamBanChay();
    return view('pages.index', ['san_pham_ban_chay' => $ds_san_pham]);
  }
  public function Hien_thi_san_pham_theo_ma_loai($ma_loai){
    $san_phams=SanPhamModel::SanPhamTheoMaLoai($ma_loai);
    return view('pages.san_pham_theo_ma_loai', ['san_pham_theo_ma_loai' => $san_phams]);
  }
  public function Giam_gia(){
    $giam_gia=SanPhamModel::GiamGia();
    return view('pages.giam_gia',['giam'=>$giam_gia]);
  }
  public function Moi(){
    $moi=SanPhamModel::SanPhamMoi();
    return view('pages.san_pham_moi',['sp_moi'=>$moi]);
  }
  public function ChiTietSP($ma_sp){
       $chi_tiet=\Response::json(SanPhamModel::ChiTietSP($ma_sp))->getData();
    return view('pages.chi_tiet_sp',['chi_tiet_sp'=>$chi_tiet]);
  }
  public function ThuongHieu($ma_thuong_hieu){
    $thuong_hieu= SanPhamModel::ThuongHieu($ma_thuong_hieu);
      return view('pages.san_pham_cung_thuong_hieu',['thuong_hieus'=>$thuong_hieu]);
  }
}


 ?>
