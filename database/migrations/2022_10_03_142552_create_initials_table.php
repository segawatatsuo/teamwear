<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('usualsale');
            $table->string('maintenancemode');
            $table->string('cat');
            $table->string('point_num');
            $table->integer('discount_num');
            $table->string('company_name');
            $table->string('zip_code');
            $table->string('address1');
            $table->string('address2');
            $table->string('tel_number');
            $table->string('fax_number');
            $table->string('order_mail');
            $table->string('inquiry_mail');
            $table->string('sender_mail');
            $table->string('error_mail');
            $table->string('copyright');
            $table->string('business_registration_number');
            $table->string('postage_privilege');
            $table->string('purchase_limit');
            $table->string('shipping_rule');
            $table->string('tax_display_activate');
            $table->string('tax_mode');
            $table->string('tax_mode_products');
            $table->double('applicable_taxrate');
            $table->double('tax_rate');
            $table->string('tax_method');
            $table->integer('button_cod_detail');
            $table->string('fee_subject_products');
            $table->text('transferee');
            $table->string('membersystem_state');
            $table->string('membersystem_point');
            $table->double('point_rate');
            $table->double('start_point');
            $table->string('point_coverage');
            $table->string('point_assign_receipt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('initials');
    }
}
