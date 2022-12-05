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

use Session;

use My_func;

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
        $pulldown_age = $age->pulldown();

        //Makerモデルからプルダウンに使う値を取得
        $maker = new Maker();
        $pulldown_maker = $maker->pulldown();

        //Classificationモデルからプルダウンに使う値を取得
        $classification = new Classification();
        $pulldown_classification = $classification->pulldown();

        //Genderモデルからプルダウンに使う値を取得
        $gender = new Gender();
        $pulldown_gender = $gender->pulldown();

        //Categoryモデルからプルダウンに使う値を取得
        $category = new Category();
        $pulldown_category = $category->pulldown();

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
        //今セーブしたid
        $last_insert_id = $product->id;
        $products = Product::find($last_insert_id);

        return redirect(route('products.index', compact('products')))->with('id', $last_insert_id)->with('flash_message', '登録しました');
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
        $pulldown_age = $age->pulldown();

        //Makerモデルからプルダウンに使う値を取得
        $maker = new Maker();
        $pulldown_maker = $maker->pulldown();

        //Classificationモデルからプルダウンに使う値を取得
        $classification = new Classification();
        $pulldown_classification = $classification->pulldown();

        //Genderモデルからプルダウンに使う値を取得
        $gender = new Gender();
        $pulldown_gender = $gender->pulldown();

        //Categoryモデルからプルダウンに使う値を取得
        $category = new Category();
        $pulldown_category = $category->pulldown();

        $products = Product::find($id);
        //画像 リレーション元→リレーション先→条件
        $images = $products->images->where('product_id', $id);

        return view('products.show', compact('products', 'pulldown_age', 'pulldown_maker', 'pulldown_classification', 'pulldown_gender', 'pulldown_category', 'images')); //'images'
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        //return view("products.index", compact('products'));
        return view('products.edit')->with('products', $products);
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

        //ageモデルからプルダウンに使う値を取得
        $age = new Age();
        $pulldown_age = $age->pulldown();

        //Makerモデルからプルダウンに使う値を取得
        $maker = new Maker();
        $pulldown_maker = $maker->pulldown();

        //Classificationモデルからプルダウンに使う値を取得
        $classification = new Classification();
        $pulldown_classification = $classification->pulldown();

        //Genderモデルからプルダウンに使う値を取得
        $gender = new Gender();
        $pulldown_gender = $gender->pulldown();

        //Categoryモデルからプルダウンに使う値を取得
        $category = new Category();
        $pulldown_category = $category->pulldown();


        $products = Product::find($id);
        //画像 リレーション元→リレーション先→条件
        $images = $products->images->where('product_id', $id);

        //return view　の際の　with()は変数をセットするメソッドになるため別途セッションで作成する。return redirectのwith()はセッションを作成できる。
        Session::flash('flash_message', '更新しました!');

        return view('products.show', compact('products', 'pulldown_age', 'pulldown_maker', 'pulldown_classification', 'pulldown_gender', 'pulldown_category', 'images')); //'images'
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
