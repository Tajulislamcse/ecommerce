<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryDTOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_d_t_o_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('productId')->unique();
            $table->unsignedInteger('quantity');
            $table->unsignedBigInteger('purchasePrice');
            $table->unsignedBigInteger('vendorId')->unique();
            $table->foreign('productId')->references('id')->on('product_d_t_o_s');
            $table->foreign('vendorId')->references('id')->on('product_vendor_d_t_o_s');

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
        Schema::dropIfExists('inventory_d_t_o_s');
    }
}
