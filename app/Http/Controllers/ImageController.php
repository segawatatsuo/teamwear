<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //一覧表示
    public function index()
    {
    }
    public function show($id)
    {
    }


    public function upload(Request $request)
    {
        // ディレクトリ名
        $dir = 'items';

        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で画像を保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);
        dd($request);

        //まだ商品登録がされていない場合
        if ($request->products_id==null) {
            $product = new Product();
            //fillableで一致する全カラムをproductsテーブルに一括保存
            $product->fill($request->all())->save();
            //今セーブしたidを取得
            $last_insert_id = $product->id;
            $products = Product::find($last_insert_id);
            // ファイル情報をimagesテーブルに保存
            $image = new Image();
            $image->product_id = $last_insert_id;

        } else {
            // ファイル情報をimagesテーブルに保存
            $image = new Image();
            $image->product_id = $request->products_id;
        }

        $image->name = $file_name;
        $image->path = 'storage/' . $dir . '/' . $file_name;
        $image->save();

        return redirect('/products/create');
    }
}
