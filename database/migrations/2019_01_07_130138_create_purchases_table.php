<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('purchase_name')->nullable();
            $table->integer('cat_id');
            $table->integer('purchase_unit');
            $table->integer('sup_id');
            $table->string('purchase_code')->nullable();
            $table->string('purchase_garage')->nullable();
            $table->string('purchase_route')->nullable();
            $table->string('purchase_image')->nullable();
            $table->string('buy_date')->nullable();
            $table->string('expire_date')->nullable();
            $table->string('buying_price')->nullable();
            $table->string('selling_price');
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
        Schema::dropIfExists('purchases');
    }
}
