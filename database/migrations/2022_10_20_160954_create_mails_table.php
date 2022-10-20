<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('thankyou_title')->comment('サンキューメールタイトル');
            $table->string('thankyou_header')->comment('サンキューメールヘッダ');
            $table->string('thankyou_footer')->comment('サンキューメールフッタ');

            $table->string('order_title')->comment('受注メールタイトル');
            $table->string('order_header')->comment('受注メールメールヘッダ');
            $table->string('order_footer')->comment('受注メールメールフッタ');

            $table->string('inquiry_title')->comment('問い合わせ受付メールタイトル');
            $table->string('inquiry_header')->comment('問い合わせ受付メールヘッダ');
            $table->string('inquiry_footer')->comment('問い合わせ受付メールフッタ');

            $table->string('membercomp_title')->comment('入会完了のご連絡メールタイトル');
            $table->string('membercomp_header')->comment('入会完了のご連絡メールヘッダ');
            $table->string('membercomp_footer')->comment('入会完了のご連絡メールフッタ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mails');
    }
}
