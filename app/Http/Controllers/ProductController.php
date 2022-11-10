<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Age;
use App\Models\Gender;
use App\Models\Maker;
use App\Models\Classification;
use App\Models\Category;
use App\Models\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(8);
        return view("products.index", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ageモデルからプルダウンに使う値を取得
        $age = new Age();
        $pulldown_age=$age->pulldown();

        //Makerモデルからプルダウンに使う値を取得
        $maker = new Maker();
        $pulldown_maker=$maker->pulldown();

        //Classificationモデルからプルダウンに使う値を取得
        $classification = new Classification();
        $pulldown_classification=$classification->pulldown();

        //Genderモデルからプルダウンに使う値を取得
        $gender = new Gender();
        $pulldown_gender=$gender->pulldown();

        //Categoryモデルからプルダウンに使う値を取得
        $category = new Category();
        $pulldown_category=$category->pulldown();

        return view("products.create", compact('pulldown_age', 'pulldown_maker', 'pulldown_classification', 'pulldown_gender', 'pulldown_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //モデルのインスタンス
        $product = new Product();
        //fillableで一致する全カラムを一括保存
        $product->fill($request->all())->save();

        $products = Product::paginate(8);
        return redirect(route('products.index', compact('products')))->with('flash_message', '登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //ageモデルからプルダウンに使う値を取得
        $age = new Age();
        $pulldown_age=$age->pulldown();

        //Makerモデルからプルダウンに使う値を取得
        $maker = new Maker();
        $pulldown_maker=$maker->pulldown();

        //Classificationモデルからプルダウンに使う値を取得
        $classification = new Classification();
        $pulldown_classification=$classification->pulldown();

        //Genderモデルからプルダウンに使う値を取得
        $gender = new Gender();
        $pulldown_gender=$gender->pulldown();

        //Categoryモデルからプルダウンに使う値を取得
        $category = new Category();
        $pulldown_category=$category->pulldown();

        $products = Product::find($id);

        //Modelsで作ったメソッド名を入れる。
        $images = Product::find($id)->images;



        return view('products.show', compact('products', 'pulldown_age', 'pulldown_maker', 'pulldown_classification', 'pulldown_gender', 'pulldown_category','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->fill($request->all())->save();
        return redirect(route('products.index'))->with('flash_message', '更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect(route('products.index'))->with('flash_message', '削除しました');
    }
}
