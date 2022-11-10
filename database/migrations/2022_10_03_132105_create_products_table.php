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

            $table->string('maker')->nullable()->comment('メーカー');
            $table->string('category')->nullable()->comment('カテゴリ');
            $table->string('classification')->nullable()->comment('分類');
            $table->string('genre')->nullable()->comment('商品ジャンル');
            $table->string('gender')->nullable()->comment('性別');
            $table->string('age')->nullable()->comment('対象年齢');

            $table->string('item_code')->nullable()->comment('商品番号');
            $table->string('item_name')->nullable()->comment('商品名');
            $table->integer('item_restriction')->nullable()->comment('限定品');
            $table->double('item_pointrate')->nullable()->comment('ポイントパーセント');
            $table->string('item_shipping')->nullable()->comment('送料');
            $table->string('item_delivery_method')->nullable()->comment('配送方法');
            $table->string('item_shipping_charge')->nullable()->comment('配送料金');
            $table->string('sku')->nullable()->comment('SKUコード');
            $table->string('skudisp')->nullable()->comment('SKU表示名');
            $table->integer('cprice')->nullable()->comment('通常価格');
            $table->integer('skuunit')->nullable()->comment('単位（枚・着）');
            $table->integer('price')->nullable()->comment('販売価格');
            $table->integer('zaikonum')->nullable()->comment('在庫数');
            $table->string('zaiko')->nullable()->comment('');

            $table->string('optkeyselect')->nullable();
            $table->string('newoptvalue')->nullable();
            $table->string('post_title')->nullable();
            $table->text('editor_area')->nullable();

            $table->text('display_recommendation_item')->nullable()->comment('おすすめ');
            $table->text('display_new_item')->nullable()->comment('新着商品');
            $table->text('display_season_item')->nullable()->comment('春夏秋冬グループ');
            $table->text('display_top_page_item')->nullable()->comment('トップページに表示');


            $table->string('product_headcopy')->nullable()->comment('商品ヘッドコピー');
            $table->string('product_copy')->nullable()->comment('商品コピー');
            $table->string('size_headcopy')->nullable()->comment('サイズヘッドコピー');
            $table->string('size_copy')->nullable()->comment('サイズコピー');
            $table->text('size_chart')->nullable()->comment('サイズ一覧表');
            $table->string('material_headcopy')->nullable()->comment('素材情報ヘッドコピー');
            $table->string('material_copy')->nullable()->comment('素材情報コピー');
            $table->string('material_img1')->nullable()->comment('イメージ画像１');
            $table->string('material_img2')->nullable()->comment('イメージ画像２');
            $table->string('material_img3')->nullable()->comment('イメージ画像３');
            $table->string('order_attention_headcopy')->nullable()->comment('ご注文時の注意ヘッドコピー');
            $table->string('order_attention_copy')->nullable()->comment('ご注文時の注意コピー');
            $table->string('order_attention_img1')->nullable()->comment('イメージ画像１');
            $table->string('order_attention_img2')->nullable()->comment('イメージ画像２');
            $table->string('order_attention_img3')->nullable()->comment('イメージ画像３');
            $table->string('printed_part1')->nullable()->comment('印刷箇所１前面');
            $table->string('printed_part2')->nullable()->comment('印刷箇所２左胸');
            $table->string('printed_part3')->nullable()->comment('印刷箇所３右胸');
            $table->string('printed_part4')->nullable()->comment('印刷箇所４背面');
            $table->string('printed_part5')->nullable()->comment('印刷箇所５襟下');
            $table->string('printed_part6')->nullable()->comment('印刷箇所６左袖');
            $table->string('printed_part7')->nullable()->comment('印刷箇所７右袖');
            $table->string('encapsulation_option')->nullable()->comment('封入オプション');
            $table->string('printing_specifications')->nullable()->comment('印刷仕様');
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
