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
            $table->string('company_name')->nullable()->comment('会社名');
            $table->string('zip_code')->nullable()->comment('郵便番号');
            $table->string('address1')->nullable()->comment('住所1');
            $table->string('address2')->nullable()->comment('住所2');
            $table->string('tel_number')->nullable()->comment('電話番号');
            $table->string('tel_number2')->nullable()->comment('電話番号');

            $table->string('fax_number')->nullable()->comment('FAX番号');
            $table->string('order_mail')->nullable()->comment('注文メールアドレス');
            $table->string('inquiry_mail')->nullable()->comment('問合せメール返信メールアドレス');
            $table->string('sender_mail')->nullable()->comment('送信元メールアドレス');
            $table->string('error_mail')->nullable()->comment('エラーメール返信先');
            $table->string('copyright')->nullable()->comment('コピーライト');
            $table->string('business_registration_number')->nullable()->comment('事業者登録番号');

            $table->string('manager')->nullable()->comment('店舗運営責任者');
            $table->string('low_notation')->nullable()->comment('特定商取引に関する法律に基づく表記');
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
