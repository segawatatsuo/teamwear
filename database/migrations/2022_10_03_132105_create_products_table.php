<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('maker')->comment('メーカー');
            $table->string('category')->comment('カテゴリ');
            $table->string('classification')->comment('分類');
            $table->string('genre')->comment('商品ジャンル');
            $table->string('gender')->comment('性別');
            $table->string('age')->comment('対象年齢');

            $table->string('item_code')->comment('商品番号');
            $table->string('item_name')->comment('商品名');
            $table->integer('item_restriction')->comment('限定品');
            $table->double('item_pointrate')->comment('ポイントパーセント');
            $table->string('item_shipping')->comment('送料');
            $table->string('item_delivery_method')->comment('配送方法');
            $table->string('item_shipping_charge')->comment('配送料金');
            $table->string('sku')->comment('SKUコード');
            $table->string('skudisp')->comment('SKU表示名');
            $table->integer('cprice')->comment('通常価格');
            $table->integer('skuunit')->comment('単位（枚・着）');
            $table->integer('price')->comment('販売価格');
            $table->integer('zaikonum')->comment('在庫数');
            $table->string('zaiko')->comment('');

            $table->string('optkeyselect');
            $table->string('newoptvalue');
            $table->string('post_title');
            $table->text('editor_area');

            $table->text('display_recommendation_item')->comment('おすすめ');
            $table->text('display_new_item')->comment('新着商品');
            $table->text('display_season_item')->comment('春夏秋冬グループ');
            $table->text('display_top_page_item')->comment('トップページに表示');


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
        Schema::dropIfExists('products');
    }
}
