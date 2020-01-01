<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavouriteProductDTOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourite_product_d_t_o_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');
            $table->unsignedbigInteger('productId');
            $table->foreign('productId')->references('id')->on('product_d_t_o_s');
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
        Schema::dropIfExists('favourite_product_d_t_o_s');
    }
}
