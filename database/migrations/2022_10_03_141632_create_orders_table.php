<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('members_id');
            $table->string('order_memo');
            $table->integer('order_no');
            $table->dateTime('order_date');
            $table->integer('member_id');
            $table->string('payment_name');
            $table->string('delivery_method');
            $table->date('delivery_date');
            $table->string('delivery_time');
            $table->date('delidue_date');
            $table->string('delivery_company');
            $table->string('tracking_number');
            $table->string('status');
            $table->string('mailaddress');
            $table->string('name1');
            $table->string('name2');
            $table->string('name3');
            $table->string('name4');
            $table->string('zipcode');
            $table->string('country');
            $table->string('pref');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('tel');
            $table->string('fax');
            $table->text('note');

            $table->string('delivery_name1');
            $table->string('delivery_name2');
            $table->string('delivery_name3');
            $table->string('delivery_name4');
            $table->string('delivery_zipcode');
            $table->string('delivery_country');
            $table->string('delivery_pref');
            $table->string('delivery_address1');
            $table->string('delivery_address2');
            $table->string('delivery_address3');
            $table->string('delivery_tel');
            $table->string('delivery_fax');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
