<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    ham up de run migration de chay luot di
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string( 'name');
            $table->mediumText('note');
            $table->timestamps();
//            bat buoc phai co truong timestamp. Neu bo di thi phai code de thong bao voi chuong trinh rang khong dung timestamp
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
