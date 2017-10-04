<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\m_san_pham;

class CartController extends Controller
{
  public function Add($ma_sp){
    $san_phams=m_san_pham::where('ma_sp',$ma_sp)->first();
    return $san_phams;
  }

}


 ?>
