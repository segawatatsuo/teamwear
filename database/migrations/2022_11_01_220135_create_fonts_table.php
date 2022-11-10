<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('competition')->nullable()->comment('競技名(野球用）');
            $table->string('font_group')->nullable()->comment('書体グループ(ひげ）');
            $table->string('font_name')->nullable()->comment('書体名）');
            $table->string('font_no')->nullable()->comment('書体番号');
            $table->string('font_img')->nullable()->comment('書体番画像');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fonts');
    }
}
