<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSpecificationDTOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_product__specification_d_t_o_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('productId')->unique();
            $table->foreign('productId')->references('id')->on('product_d_t_o_s');

            $table->unsignedBigInteger('specificationId')->unique();
            $table->foreign('specificationId')->references('id')->on('specification_d_t_o_s');

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
        Schema::dropIfExists('_product__specification_d_t_o_s');
    }
}
