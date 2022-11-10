<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('cart_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('member_no')->comment('会員番号');
            $table->string('status')->nullable();
            $table->integer('point')->nullable();
            $table->dateTime('join_date')->comment('登録日');
            $table->string('email')->nullable();
            $table->string('name1')->nullable();
            $table->string('name2')->nullable();
            $table->string('name3')->nullable();
            $table->string('name4')->nullable();

            $table->string('zipcode')->nullable();
            $table->string('country')->nullable();
            $table->string('pref')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();

            $table->string('tel')->nullable();
            $table->string('fax')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
