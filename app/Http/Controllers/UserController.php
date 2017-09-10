<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
        $thang=date('m');
        $users = DB::table('san_pham')
                        ->join('chi_tiet_don_hang','san_pham.ma_sp','=','chi_tiet_don_hang.ma_sp')
                        ->join('don_hang','chi_tiet_don_hang.ma_don_hang','=','don_hang.ma_don_hang')
                        ->whereMonth('ngay_dat',2)
                        ->limit(12)
                        ->get();

        return view('pages.index', ['users' => $users]);

    //     SELECT * from sieu_thi.san_pham inner join sieu_thi.chi_tiet_don_hang on san_pham.ma_sp = chi_tiet_don_hang.ma_sp
    // inner join sieu_thi.don_hang on chi_tiet_don_hang.ma_don_hang=don_hang.ma_don_hang
    // where month(ngay_dat)=$thang order by so_luong desc limit 9


    }
}
