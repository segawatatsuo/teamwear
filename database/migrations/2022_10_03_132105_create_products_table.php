<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('category');
            $table->string('item_code');
            $table->string('item_name');
            $table->integer('item_restriction');
            $table->double('item_pointrate');
            $table->string('item_shipping');
            $table->string('item_delivery_method');
            $table->string('item_shipping_charge');
            $table->string('sku');
            $table->string('skudisp');
            $table->integer('cprice');
            $table->integer('skuunit');
            $table->integer('price');
            $table->integer('zaikonum');
            $table->string('zaiko');

            $table->string('optkeyselect');
            $table->string('newoptvalue');
            $table->string('post_title');
            $table->text('editor_area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
