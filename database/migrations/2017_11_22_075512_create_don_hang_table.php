<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('don_hang', function (Blueprint $table) {
          $table->increments('ma_don_hang');
          $table->integer('ma_khach_hang');
          $table->date('ngay_dat');
          $table->string('hinh_thuc_thanh_toan');
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
        Schema::dropIfExists('don_hang');
    }
}
