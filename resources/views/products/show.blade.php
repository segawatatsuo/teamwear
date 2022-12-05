@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 style="display: inline;vertical-align: middle;margin-right: 10px;">編集</h3>

                        <a href="#" class="btn btn-secondary" onclick='window.history.back(-1);'>一覧に戻る</a> 



                        <form method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button formaction="{{ route('products.destroy', $products->id) }}" type="submit"
                                class="btn btn-danger" onclick='return confirm("削除しますか？");'>削除</button>
                        </form>

                        <form method="post" action={{ route('products.update', $products->id) }} style="display: inline;">
                            @csrf
                            @method('patch')
                            <button type="submit" class="btn btn-primary">更新</button>
                    </div>

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
                                <input type="text" value="{{ $products->item_code }}" class="form-control" id="item_code"
                                    name="item_code" style="width:50%">
                            </div>

                            <div class="form-group">
                                <label for="item_name">商品名</label>
                                <input type="text" value="{{ $products->item_name }}" class="form-control" id="item_name"
                                    name="item_name" style="width:100%">
                            </div>

                            <div class="form-group">
                                <label for="maker">メーカー</label>
                                <!--Formファサード-->
                                {{ Form::select('maker', $pulldown_maker, $products->maker, ['class' => 'form-control', 'name' => 'maker', 'style' => 'width:50%']) }}
                            </div>

                            <div class="form-group">
                                <label for="category">競技種別</label>
                                <!--Formファサード-->
                                {{ Form::select('category', $pulldown_category, $products->category, ['class' => 'form-control', 'name' => 'category', 'style' => 'width:50%']) }}
                            </div>

                            <div class="form-group">
                                <label for="classification">商品分類</label>
                                <!--Formファサード-->
                                {{ Form::select('classification', $pulldown_classification, $products->classification, ['class' => 'form-control', 'name' => 'classification', 'style' => 'width:50%']) }}
                            </div>



                            <div class="form-group">
                                <label for="age">対象年齢</label>
                                <!--Formファサード-->
                                {{ Form::select('age', $pulldown_age, $products->age, ['class' => 'form-control', 'name' => 'age', 'style' => 'width:50%']) }}

                            </div>

                            <div class="form-group">
                                <label for="gender">性別</label>
                                <!--Formファサード-->
                                {{ Form::select('gender', $pulldown_gender, $products->gender, ['class' => 'form-control', 'name' => 'gender', 'style' => 'width:50%']) }}

                            </div>
                            <div class="form-group">
                                <label for="skuunit">単位（枚・着）</label>
                                <input type="text" value="{{ $products->skuunit }}" class="form-control" id="skuunit"
                                    name="skuunit" style="width:50%">
                            </div>

                            <div class="form-group">
                                <label for="cprice">定価</label>
                                <input type="text" value="{{ $products->cprice }}" class="form-control" id="cprice"
                                    name="cprice" style="width:50%">
                            </div>

                            <div class="form-group">
                                <label for="price">販売価格</label>
                                <input type="text" value="{{ $products->price }}" class="form-control" id="price"
                                    name="price" style="width:50%">
                            </div>

                            <div class="form-group">
                                <label for="purchase_price">仕入価格</label>
                                <input type="text" value="{{ $products->purchase_price }}" class="form-control"
                                    id="purchase_price" name="purchase_price" style="width:50%">
                            </div>

                            <div class="form-group">
                                <label for="item_shipping">送料</label>
                                <input type="text" value="{{ $products->item_shipping }}" class="form-control"
                                    id="item_shipping" name="item_shipping" style="width:50%">
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
                                    <input type="radio" name="display_recommendation_item" value="はい"
                                        {{ old('display_recommendation_item', $products->display_recommendation_item) == 'はい' ? 'checked' : '' }}>
                                    はい
                                    <input type="radio" name="display_recommendation_item" value="いいえ"
                                        {{ old('display_recommendation_item', $products->display_recommendation_item) == 'いいえ' ? 'checked' : '' }}>
                                    いいえ
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="display_new_item">新着商品</label>
                                <div>
                                    <input type="radio" name="display_new_item" value="はい"
                                        {{ old('display_new_item', $products->display_new_item) == 'はい' ? 'checked' : '' }}>
                                    はい
                                    <input type="radio" name="display_new_item" value="いいえ"
                                        {{ old('display_new_item', $products->display_new_item) == 'いいえ' ? 'checked' : '' }}>
                                    いいえ
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="display_season_item">春夏秋冬グループ</label>
                                {{ Form::select('display_season_item', ['春' => '春', '夏' => '夏', '秋' => '秋', '冬' => '冬','通年'=>'通年'], $products->display_season_item, ['class' => 'form-control', 'id' => 'maker', 'style' => 'width:15%']) }}
                            </div>


                            <div class="form-group">
                                <label for="display_top_page_item">トップページに表示</label>
                                <div>
                                    <input type="radio" name="display_top_page_item" value="はい"
                                        {{ old('display_top_page_item', $products->display_top_page_item) == 'はい' ? 'checked' : '' }}>
                                    はい
                                    <input type="radio" name="display_top_page_item" value="いいえ"
                                        {{ old('display_top_page_item', $products->display_top_page_item) == 'いいえ' ? 'checked' : '' }}>
                                    いいえ
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
                                <ul class="jquery-ui-sortable">
                                    <li class="ui-state-default border-color-red">項目 1-1</li>
                                    <li class="ui-state-default border-color-red">項目 1-2</li>
                                    <li class="ui-state-default border-color-red">項目 1-3</li>
                                    <li class="ui-state-default border-color-red">項目 1-4</li>
                                    <li class="ui-state-default border-color-red">項目 1-5</li>
                                    <li class="ui-state-default border-color-red">項目 1-6</li>
                                    <li class="ui-state-default border-color-red">項目 1-7</li>
                                </ul>
                                <ul class="jquery-ui-sortable">
                                    <li class="ui-state-default border-color-blue">項目 2-1</li>
                                    <li class="ui-state-default border-color-blue">項目 2-2</li>
                                    <li class="ui-state-default border-color-blue">項目 2-3</li>
                                    <li class="ui-state-default border-color-blue">項目 2-4</li>
                                    <li class="ui-state-default border-color-blue">項目 2-5</li>
                                    <li class="ui-state-default border-color-blue">項目 2-6</li>
                                    <li class="ui-state-default border-color-blue">項目 2-7</li>
                                </ul>
                                <div style="clear: both;"></div>
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
                            <div class="form-group">
                            <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="image">
                                <button>アップロード</button>
                                <input type="hidden" name="products_id" value="{{ $products->id }}">
                                <hr>
                            </form>
                            
                        </div>
                        <!--画像があれば-->
                        @if (count($images) > 0)
                            @foreach ($images as $img)
                                <img src="{{ url($img->path) }}" width="25%">
                            @endforeach
                        @endif
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
    <link rel="stylesheet" href="{{ asset('/css/admin_custom.css')}}">
@stop

@section('js')
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<script>
    <!--
    $( function() {
        $( '.jquery-ui-sortable' ) . sortable( {
            connectWith: '.jquery-ui-sortable'
        } );
        $( '.jquery-ui-sortable' ) . disableSelection();
    } );
    // -->
    </script>
@stop
