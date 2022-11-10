<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'maker',
        'category',
        'classification',
        'genre',
        'gender',
        'age',
        'item_code',
        'item_name',
        'item_restriction',
        'item_pointrate',
        'item_shipping',
        'item_delivery_method',
        'item_shipping_charge',
        'sku',
        'skudisp',
        'cprice',
        'skuunit',
        'price',
        'zaikonum',
        'zaiko',
        'optkeyselect',
        'newoptvalue',
        'post_title',
        'editor_area',
        'display_recommendation_item',
        'display_new_item',
        'display_season_item',
        'display_top_page_item',
        'product_headcopy',
        'product_copy',
        'size_headcopy',
        'size_copy',
        'size_chart',
        'material_headcopy',
        'material_copy',
        'material_img1',
        'material_img2',
        'material_img3',
        'order_attention_headcopy',
        'order_attention_copy',
        'order_attention_img1',
        'order_attention_img2',
        'order_attention_img3',
        'printed_part1',
        'printed_part2',
        'printed_part3',
        'printed_part4',
        'printed_part5',
        'printed_part6',
        'printed_part7',
        'encapsulation_option',
        'printing_specifications',
    ];

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
}
