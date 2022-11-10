<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('content')->nullable()->comment('メーカー名');

            $table->string('person')->nullable()->comment('担当者');
            $table->string('address')->nullable()->comment('住所');
            $table->string('tel')->nullable()->comment('電話');
            $table->string('fax')->nullable()->comment('FAX');
            $table->string('mail')->nullable()->comment('メール');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makers');
    }
}
