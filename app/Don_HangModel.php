<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Don_HangModel extends Model
{
      protected $table="don_hang";
      public static function donHangCuoi(){
        return DB::table('don_hang')->orderBy('ma_don_hang','DESC')->first();
      }
}
