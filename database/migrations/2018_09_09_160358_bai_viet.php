<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BaiViet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_viet', function (Blueprint $table) {
            $table->increments('id');
            //tieu de: title
            $table->string('title');//varchar
            //noidung: content
            $table->string('content');
            $table->string('hinh_anh');
            $table->integer('id_danh_muc');
            $table->timestamps('create_post');
            $table->timestamps('update_post');
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
        Schema::dropIfExists('users');
    }
}
