<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePulldownMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pulldown_mains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('jname')->nullable()->comment('日本語名');
            $table->string('name')->nullable()->comment('英語名');
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
        Schema::dropIfExists('pulldown_mains');
    }
}
