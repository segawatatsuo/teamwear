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

            $table->integer('member_no')->nullable()->comment('会員番号');
            $table->string('order_memo')->nullable()->comment('注文メモ');
            $table->integer('order_no')->nullable()->comment('注文番号');
            $table->dateTime('order_date')->nullable()->comment('注文日');
            $table->string('payment_name')->nullable()->comment('支払方法');
            $table->string('delivery_method')->nullable()->comment('配送方法');
            $table->date('delivery_date')->nullable()->comment('配送希望日');
            $table->string('delivery_time')->nullable()->comment('配送希望時間');
            $table->date('sending_date')->nullable()->comment('発送日');
            $table->string('delivery_company')->nullable()->comment('運送会社');
            $table->string('tracking_number')->nullable()->comment('追跡番号');
            $table->string('status')->nullable()->comment('配送状況');

            $table->string('mailaddress')->nullable()->comment('メール');
            $table->string('name1')->nullable()->comment('注文者姓');
            $table->string('name2')->nullable()->comment('注文者名');
            $table->string('name3')->nullable()->comment('注文者姓カナ');
            $table->string('name4')->nullable()->comment('注文者名カナ');
            $table->string('zipcode')->nullable()->comment('注文者郵便番号');
            $table->string('country')->nullable()->comment('注文者国');
            $table->string('pref')->nullable()->comment('注文者都道府県');
            $table->string('address1')->nullable()->comment('注文者市区町村');
            $table->string('address2')->nullable()->comment('注文者番地');
            $table->string('address3')->nullable()->comment('注文者ビル名');
            $table->string('tel')->nullable()->comment('注文者電話');
            $table->string('fax')->nullable()->comment('注文者FAX');
            $table->text('note')->nullable()->comment('注文者メモ');

            $table->string('delivery_name1')->nullable()->comment('配送先姓');
            $table->string('delivery_name2')->nullable()->comment('配送先名');
            $table->string('delivery_name3')->nullable()->comment('配送先姓カナ');
            $table->string('delivery_name4')->nullable()->comment('配送先名カナ');
            $table->string('delivery_zipcode')->nullable()->comment('配送先郵便番号');
            $table->string('delivery_country')->nullable()->comment('配送先国');
            $table->string('delivery_pref')->nullable()->comment('配送先都道府県');
            $table->string('delivery_address1')->nullable()->comment('配送先市区町村');
            $table->string('delivery_address2')->nullable()->comment('配送先番地');
            $table->string('delivery_address3')->nullable()->comment('配送先ビル名');
            $table->string('delivery_tel')->nullable()->comment('配送先電話');
            $table->string('delivery_fax')->nullable()->comment('配送先FAX');
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
