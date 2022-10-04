<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMany1009ToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('product_headcopy')->comment('商品ヘッドコピー');
            $table->string('product_copy')->comment('商品コピー');
            $table->string('size_headcopy')->comment('サイズヘッドコピー');
            $table->string('size_copy')->comment('サイズコピー');
            $table->text('size_chart')->comment('サイズ一覧表');
            $table->string('material_headcopy')->comment('素材情報ヘッドコピー');
            $table->string('material_copy')->comment('素材情報コピー');
            $table->string('material_img1')->comment('イメージ画像１');
            $table->string('material_img2')->comment('イメージ画像２');
            $table->string('material_img3')->comment('イメージ画像３');
            $table->string('order_attention_headcopy')->comment('ご注文時の注意ヘッドコピー');
            $table->string('order_attention_copy')->comment('ご注文時の注意コピー');
            $table->string('order_attention_img1')->comment('イメージ画像１');
            $table->string('order_attention_img2')->comment('イメージ画像２');
            $table->string('order_attention_img3')->comment('イメージ画像３');
            $table->string('printed_part1')->comment('印刷箇所１前面');
            $table->string('printed_part2')->comment('印刷箇所２左胸');
            $table->string('printed_part3')->comment('印刷箇所３右胸');
            $table->string('printed_part4')->comment('印刷箇所４背面');
            $table->string('printed_part5')->comment('印刷箇所５襟下');
            $table->string('printed_part6')->comment('印刷箇所６左袖');
            $table->string('printed_part7')->comment('印刷箇所７右袖');
            $table->string('encapsulation_option')->comment('封入オプション');
            $table->string('printing_specifications')->comment('印刷仕様');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
