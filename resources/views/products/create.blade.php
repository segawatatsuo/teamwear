@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h3 style="display: inline;vertical-align: middle;margin-right: 10px;">新規登録</h3>
                        <input type="submit" value="  登 録  " class="btn btn-primary">
                        <input type="reset" value="キャンセル" class="btn btn-secondary" onclick='window.history.back(-1);'>
                    </div>
                </div>
            </div>
        </section>
    @stop

    @section('content')

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <!-- フラッシュメッセージ -->
                @if (session('flash_message'))
                    <div class="flash_message bg-success text-center py-3 my-0 mb-3">
                        {{ session('flash_message') }}
                    </div>
                @endif

                <!-- エラー時のフラッシュメッセージ -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-success">

                            <div class="card-header" style="background-color:#77B1A1">
                                <h3 class="card-title">商品マスター</h3>
                            </div>

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="item_code">商品コード</label>
                                    <input type="text" value="" class="form-control" id="item_code"
                                        name="item_code" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="item_name">商品名</label>
                                    <input type="text" value="" class="form-control" id="item_name"
                                        name="item_name" style="width:100%">
                                </div>

                                <div class="form-group">
                                    <label for="maker">メーカー</label>
                                    <!--Formファサード-->
                                    {{ Form::select('maker', $pulldown_maker, 'selected', ['class' => 'form-control', 'name' => 'maker', 'style' => 'width:50%']) }}
                                </div>

                                <div class="form-group">
                                    <label for="category">競技種別</label>
                                    <!--Formファサード-->
                                    {{ Form::select('category', $pulldown_category, 'selected', ['class' => 'form-control', 'name' => 'category', 'style' => 'width:50%']) }}
                                </div>

                                <div class="form-group">
                                    <label for="classification">商品分類</label>
                                    <!--Formファサード-->
                                    {{ Form::select('classification', $pulldown_classification, 'selected', ['class' => 'form-control', 'name' => 'classification', 'style' => 'width:50%']) }}
                                </div>

                                <div class="form-group">
                                    <label for="age">対象年齢</label>
                                    <!--Formファサード-->
                                    {{ Form::select('age', $pulldown_age, 'selected', ['class' => 'form-control', 'name' => 'age', 'style' => 'width:50%']) }}
                                </div>

                                <div class="form-group">
                                    <label for="gender">性別</label>
                                    <!--Formファサード-->
                                    {{ Form::select('gender', $pulldown_gender, 'selected', ['class' => 'form-control', 'name' => 'gender', 'style' => 'width:50%']) }}
                                </div>

                                <div class="form-group">
                                    <label for="skuunit">単位（枚・着）</label>
                                    <input type="text" value="" class="form-control" id="skuunit" name="skuunit"
                                        style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="cprice">定価</label>
                                    <input type="text" value="" class="form-control" id="cprice" name="cprice"
                                        style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="price">販売価格</label>
                                    <input type="text" value="" class="form-control" id="price" name="price"
                                        style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="purchase_price">仕入価格</label>
                                    <input type="text" value="" class="form-control" id="purchase_price"
                                        name="purchase_price" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="item_shipping">送料</label>
                                    <input type="text" value="" class="form-control" id="item_shipping"
                                        name="item_shipping" style="width:50%">
                                </div>


                                <!--
                                        <div class="form-group">
                                            <div>
                                                <label for="Customer">
                                                    <span style="margin-right:85px">定価</span><span
                                                        style="margin-right:80px">Fedex</span><span
                                                        style="margin-right:80px">Air_1</span><span
                                                        style="margin-right:50px">Air_Ship</span>Ship<span></span>
                                                </label>
                                            </div>
                                            <input type="text" value="" class="form-control"
                                                id="price" style="width:15%;display:inline-block;">
                                            <input type="text" value=""
                                                class="form-control" id="price_fedex" style="width:15%;display:inline-block;">

                                            <input type="text" value=""
                                                class="form-control" id="price_air_1" style="width:15%;display:inline-block;">

                                            <input type="text" value=""
                                                class="form-control" id="price_air_2" style="width:15%;display:inline-block;">

                                            <input type="text" value=""
                                                class="form-control" id="price_ship" style="width:15%;display:inline-block;">
                                        </div>
                                    -->

                            </div>
                            <!-- /.card-body -->
                        </div>



                    </div>

                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">

                        <div class="card card-success">
                            <div class="card-header" style="background-color:#77B1A1">
                                <h3 class="card-title">表示関連</h3>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="display_recommendation_item">おすすめ</label>
                                    <div>
                                        <input type="radio" name="display_recommendation_item" value="はい"> はい
                                        <input type="radio" name="display_recommendation_item" value="いいえ"> いいえ
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="display_new_item">新着商品</label>
                                    <div>
                                        <input type="radio" name="display_new_item" value="はい"> はい
                                        <input type="radio" name="display_new_item" value="いいえ"> いいえ
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="display_season_item">春夏秋冬グループ</label>
                                    {{ Form::select('display_season_item', ['春' => '春', '夏' => '夏', '秋' => '秋', '冬' => '冬', '通年' => '通年'], 'selected', ['class' => 'form-control', 'id' => 'maker', 'style' => 'width:15%']) }}
                                </div>

                                <div class="form-group">
                                    <label for="display_top_page_item">トップページに表示</label>
                                    <div>
                                        <input type="radio" name="display_top_page_item" value="はい"> はい
                                        <input type="radio" name="display_top_page_item" value="いいえ"> いいえ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- -->
                        <div class="card card-success">
                            <div class="card-header" style="background-color:#77B1A1">
                                <h3 class="card-title">プルダウン項目</h3>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Customer">シャツカラー</label>
                                    <input type="text" name="" id="" class="form-control"
                                        value="" style="width:15%">
                                </div>

                                <div class="form-group">
                                    <label for="Customer">チーム名カラー</label>
                                    <input type="text" name="" id="" class="form-control"
                                        value="" style="width:15%">
                                </div>

                                <div class="form-group">
                                    <label for="Customer">チーム名書体ボタン</label>
                                    <input type="text" name="" id="" class="form-control"
                                        value="" style="width:15%">
                                </div>

                                <div class="form-group">
                                    <label for="Customer">サイズ</label>
                                    <input type="text" name="" id="" class="form-control"
                                        value="" style="width:15%">
                                </div>
                            </div>
                        </div>
    </form>


    <!-- general form elements -->
    <div class="card card-success">
        <div class="card-header" style="background-color:#77B1A1">
            <h3 class="card-title">画像</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image">
                <button>アップロード</button>
            </form>
        </div>
    </div>
    </div>
    <!-- /.col-md-6 -->
    </div>
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
