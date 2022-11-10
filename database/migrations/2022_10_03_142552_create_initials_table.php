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

            $table->string('usualsale')->nullable()->comment('通常営業中');
            $table->string('maintenancemode')->nullable()->comment('メンテナンス中');
            $table->string('cat')->nullable()->comment('キャンペーン対象');
            $table->string('point_num')->nullable()->comment('キャンペーン特典ポイント何倍');
            $table->integer('discount_num')->nullable()->comment('キャンペーン特典値引き率');



            $table->string('postage_privilege')->nullable()->comment('送料無料条件');
            $table->string('purchase_limit')->nullable()->comment('購入制限数初期値');
            $table->string('shipping_rule')->nullable()->comment('発送日の初期値');

            $table->string('tax_display_activate')->nullable()->comment('消費税表示するしない');
            $table->string('tax_mode')->nullable()->comment('税込みか税別');
            $table->string('tax_mode_products')->nullable()->comment('消費税対象（代金のみか総合計金額か）');
            $table->double('applicable_taxrate')->nullable()->comment('適用税率（標準か軽減税率）');
            $table->double('tax_rate')->nullable()->comment('消費税率');
            $table->string('tax_method')->nullable()->comment('端数の切捨て、切上げ、四捨五入');

            $table->integer('button_cod_detail')->nullable()->comment('代引き手数料');
            $table->string('fee_subject_products')->nullable()->comment('手数料対象（商品のみか総合計か）');
            $table->text('transferee')->nullable()->comment('振込先口座情報');

            $table->string('membersystem_state')->nullable()->comment('会員システム（利用するしない）');
            $table->string('membersystem_point')->nullable()->comment('会員ポイント（利用するしない）');
            $table->double('point_rate')->nullable()->comment('会員ポイント初期値％');
            $table->double('start_point')->nullable()->comment('会員登録時に付与するポイント');
            $table->string('point_coverage')->nullable()->comment('ポイント適用範囲');
            $table->string('point_assign_receipt')->nullable()->comment('ポイント付与のタイミング');
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
