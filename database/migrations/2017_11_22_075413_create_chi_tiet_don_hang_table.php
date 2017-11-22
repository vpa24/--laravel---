<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('chi_tiet_don_hang', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('ma_sp');
          $table->integer('ma_don_hang');
          $table->integer('so_luong');
          $table->rememberToken();
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('chi_tiet_don_hang');
    }
}
