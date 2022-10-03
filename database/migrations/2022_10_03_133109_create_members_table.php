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

            $table->integer('cart_id');
            $table->integer('user_id');
            $table->integer('member_no');
            $table->string('status');
            $table->integer('point');
            $table->dateTime('join_date');
            $table->string('email');
            $table->string('name1');
            $table->string('name2');
            $table->string('name3');
            $table->string('name4');

            $table->string('zipcode');
            $table->string('country');
            $table->string('pref');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');

            $table->string('tel');
            $table->string('fax');
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
