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

            $table->string('usualsale')->comment('通常営業中');
            $table->string('maintenancemode')->comment('メンテナンス中');
            $table->string('cat')->comment('キャンペーン対象');
            $table->string('point_num')->comment('キャンペーン特典ポイント何倍');
            $table->integer('discount_num')->comment('キャンペーン特典値引き率');

            $table->string('company_name')->comment('会社名');
            $table->string('zip_code')->comment('郵便番号');
            $table->string('address1')->comment('住所1');
            $table->string('address2')->comment('住所2');
            $table->string('tel_number')->comment('電話');
            $table->string('fax_number')->comment('FAX');
            $table->string('order_mail')->comment('注文先メール');
            $table->string('inquiry_mail')->comment('問い合わせ先メール');
            $table->string('sender_mail')->comment('返信元メール');
            $table->string('error_mail')->comment('エラーメール戻り先');
            $table->string('copyright')->comment('コピーライト');
            $table->string('business_registration_number')->comment('事業者登録番号');

            $table->string('postage_privilege')->comment('送料無料条件');
            $table->string('purchase_limit')->comment('購入制限数初期値');
            $table->string('shipping_rule')->comment('発送日の初期値');

            $table->string('tax_display_activate')->comment('消費税表示するしない');
            $table->string('tax_mode')->comment('税込みか税別');
            $table->string('tax_mode_products')->comment('消費税対象（代金のみか総合計金額か）');
            $table->double('applicable_taxrate')->comment('適用税率（標準か軽減税率）');
            $table->double('tax_rate')->comment('消費税率');
            $table->string('tax_method')->comment('端数の切捨て、切上げ、四捨五入');

            $table->integer('button_cod_detail')->comment('代引き手数料');
            $table->string('fee_subject_products')->comment('手数料対象（商品のみか総合計か）');
            $table->text('transferee')->comment('振込先口座情報');

            $table->string('membersystem_state')->comment('会員システム（利用するしない）');
            $table->string('membersystem_point')->comment('会員ポイント（利用するしない）');
            $table->double('point_rate')->comment('会員ポイント初期値％');
            $table->double('start_point')->comment('会員登録時に付与するポイント');
            $table->string('point_coverage')->comment('ポイント適用範囲');
            $table->string('point_assign_receipt')->comment('ポイント付与のタイミング');
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
