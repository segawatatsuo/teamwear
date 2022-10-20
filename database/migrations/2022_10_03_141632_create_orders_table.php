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

            $table->integer('member_no')->comment('会員番号');
            $table->string('order_memo')->comment('注文メモ');
            $table->integer('order_no')->comment('注文番号');
            $table->dateTime('order_date')->comment('注文日');
            $table->string('payment_name')->comment('支払方法');
            $table->string('delivery_method')->comment('配送方法');
            $table->date('delivery_date')->comment('配送希望日');
            $table->string('delivery_time')->comment('配送希望時間');
            $table->date('sending_date')->comment('発送日');
            $table->string('delivery_company')->comment('運送会社');
            $table->string('tracking_number')->comment('追跡番号');
            $table->string('status')->comment('配送状況');

            $table->string('mailaddress')->comment('メール');
            $table->string('name1')->comment('注文者姓');
            $table->string('name2')->comment('注文者名');
            $table->string('name3')->comment('注文者姓カナ');
            $table->string('name4')->comment('注文者名カナ');
            $table->string('zipcode')->comment('注文者郵便番号');
            $table->string('country')->comment('注文者国');
            $table->string('pref')->comment('注文者都道府県');
            $table->string('address1')->comment('注文者市区町村');
            $table->string('address2')->comment('注文者番地');
            $table->string('address3')->comment('注文者ビル名');
            $table->string('tel')->comment('注文者電話');
            $table->string('fax')->comment('注文者FAX');
            $table->text('note')->comment('注文者メモ');

            $table->string('delivery_name1')->comment('配送先姓');
            $table->string('delivery_name2')->comment('配送先名');
            $table->string('delivery_name3')->comment('配送先姓カナ');
            $table->string('delivery_name4')->comment('配送先名カナ');
            $table->string('delivery_zipcode')->comment('配送先郵便番号');
            $table->string('delivery_country')->comment('配送先国');
            $table->string('delivery_pref')->comment('配送先都道府県');
            $table->string('delivery_address1')->comment('配送先市区町村');
            $table->string('delivery_address2')->comment('配送先番地');
            $table->string('delivery_address3')->comment('配送先ビル名');
            $table->string('delivery_tel')->comment('配送先電話');
            $table->string('delivery_fax')->comment('配送先FAX');
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
