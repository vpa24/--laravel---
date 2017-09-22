<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\m_san_pham;

class UserController extends Controller
{
    public function index()
    {

        $ds_san_pham=m_san_pham::join('chi_tiet_don_hang','san_pham.ma_sp','=','chi_tiet_don_hang.ma_sp')
                        ->join('don_hang','chi_tiet_don_hang.ma_don_hang','=','don_hang.ma_don_hang')
                        ->whereMonth('ngay_dat',2)
                        ->limit(12)
                        ->get();

        return view('pages.index', ['ds_san_pham' => $ds_san_pham]);

    }
}
