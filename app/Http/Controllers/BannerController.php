<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\BannerModel;

class BannerController extends Controller
{
  public function ThayDoiBanner($ma_loai){
    return  $ma_loai;
    // $san_phams=m_san_pham::join('loai_sp','san_pham.ma_loai','=','loai_sp.ma_loai')->where('san_pham.ma_loai', $ma_loai)->get();
    // return view('pages.san_pham_theo_ma_loai', ['san_phams' => $san_phams]);
  }
}


 ?>
