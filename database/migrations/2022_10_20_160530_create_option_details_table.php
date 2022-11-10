<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('option_id')->nullable()->comment('オプションID');
            $table->string('value')->nullable()->comment('オプション値');
            $table->string('price')->nullable()->comment('オプション価格');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('option_details');
    }
}
