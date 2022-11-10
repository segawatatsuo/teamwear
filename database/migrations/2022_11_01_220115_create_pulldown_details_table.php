<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePulldownDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pulldown_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('price')->nullable()->comment('data-price');
            $table->string('value')->nullable()->comment('値');
            $table->string('conditions')->nullable()->comment('抽出条件');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pulldown_details');
    }
}
