<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('company_name')->comment('会社名');
            $table->string('zip_code')->comment('郵便番号');
            $table->string('address1')->comment('住所1');
            $table->string('address2')->nullable()->comment('住所2');
            $table->string('tel_number')->comment('電話番号');
            $table->string('fax_number')->comment('FAX番号');
            $table->string('order_mail')->comment('注文メールアドレス');
            $table->string('inquiry_mail')->nullable()->comment('問合せメール返信メールアドレス');
            $table->string('sender_mail')->nullable()->comment('送信元メールアドレス');
            $table->string('error_mail')->nullable()->comment('エラーメール返信先');
            $table->string('copyright')->nullable()->comment('コピーライト');
            $table->string('business_registration_number')->nullable()->comment('事業者登録番号');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
