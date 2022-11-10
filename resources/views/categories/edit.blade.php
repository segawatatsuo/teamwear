@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 style="display: inline;vertical-align: middle;margin-right: 10px;">編集</h3>

                <form method="post" style="display: inline;">
                    @csrf


                    <button formaction="{{ 'products.update' }}" type="submit" class="btn btn-primary">更新</button>
                    <button formaction="{{ 'products.duplication' }}" type="submit" class="btn btn-info">複製</button>
                    <a href="#" class="btn btn-secondary" onclick='window.history.back(-1);'>前画面に戻る</a>

                    @if(isset($prev))
                    <a href="{{ route('products.edit',['id'=>$prev]) }}" class="btn btn-success">前</a>
                    @endif
                    @if(isset($next))
                    <a href="{{ route('products.edit',['id'=>$next]) }}" class="btn btn-success">次</a>
                    @endif


            </div>
        </div>
    </div>
</section>
@stop

@section('content')

<!-- Main content -->
<div class="content">
    <div class="container-fluid">


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

                <!-- general form elements -->
                <div class="card card-success">
                    <div class="card-header" style="background-color:#77B1A1">
                        <h3 class="card-title">コード名称</h3>
                    </div>


                    <div class="card-body">

                        <div class="form-group">
                            <label for="Customer">ソート</label>
                            <input type="text" value="{{ $product->sort_order }}" class="form-control" id="sort_order" name="sort_order" style="width:10%">
                        </div>

                        <div class="form-group">
                            <label for="Customer">商品コード</label>
                            <input type="text" value="{{ $product->product_code }}" class="form-control" id="product_code" name="product_code" style="width:20%">
                        </div>

                        <div class="form-group">
                            <label for="Customer">ブランド</label>
                            <input type="text" value="{{ $product->category }}" class="form-control" id="category" name="category" style="width:50%">
                        </div>

                        <div class="form-group">
                            <label for="Customer">商品名</label>
                            <input type="text" value="{{ $product->group }}" class="form-control" id="group" name="group" style="width:50%">
                        </div>

                        <div class="form-group">
                            <label for="Customer">種類</label>
                            <input type="text" value="{{ $product->kind }}" class="form-control" name="kind" id="kind" style="width:50%">
                        </div>





                        <div class="form-group">
                            <label for="Customer">JANコード</label>
                            <input type="text" value="{{ $product->jan_code }}" class="form-control" id="jan_code" name="jan_code" style="width:20%">
                        </div>

                        <div class="form-group">
                            <div>
                                <label for="Customer">
                                    <span style="margin-right:120px">ASIN</span> 
                                    <span style="margin-right:120px">EAN</span> 
                                    <span style="margin-right:130px">SKU</span>
                                    <span>Model Number</span>
                                </label>
                            </div>

                            <input type="text" value="{{ $product->asin }}" class="form-control" id="asin" name="asin" style="width:20%;display:inline-block;">

                            <input type="text" value="{{ $product->ean_code }}" class="form-control" id="ean_code" name="ean_code" style="width:20%;display:inline-block;">

                            <input type="text" value="{{ $product->sku_code }}" class="form-control" id="sku_code" name="sku_code" style="width:20%;display:inline-block;">

                            <input type="text" value="{{ $product->spec }}" class="form-control" id="spec" name="spec" style="width:20%;display:inline-block;">

                        </div>



                        <div class="form-group">
                            <label for="Customer">メーカー名</label>
                            <input type="text" value="{{ $product->maker_name }}" class="form-control" id="maker_name" name="maker_name">
                        </div>




                        <div class="form-group">
                            <div>
                                <label for="Customer">
                                    <span style="margin-right:85px">定価</span>
                                    <span style="margin-right:70px">Fedex</span>
                                    <span style="margin-right:75px">Air_1</span>
                                    <span style="margin-right:70px">Air_2</span>
                                   <span> Ship</span>
                                </label>
                            </div>

                            <input type="text" value="{{ sprintf('%.2f', $product->price) }}" class="form-control" id="price" name="price" style="width:15%;display:inline-block;">


                            <input type="text" value="{{ sprintf('%.2f', $product->price_fedex) }}" class="form-control" id="price_fedex" name="price_fedex" style="width:15%;display:inline-block;">

                            <input type="text" value="{{ sprintf('%.2f', $product->price_air_1) }}" class="form-control" id="price_air_1" name="price_air_1" style="width:15%;display:inline-block;">

                            <input type="text" value="{{ sprintf('%.2f', $product->price_air_2) }}" class="form-control" id="price_air_2" name="price_air_2" style="width:15%;display:inline-block;">

                            <input type="text" value="{{ sprintf('%.2f', $product->price_ship) }}" class="form-control" id="price_ship" name="price_ship" style="width:15%;display:inline-block;">
                        </div>










                    </div>
                    <!-- /.card-body -->
                </div>


                <!-- general form elements -->
                <div class="card card-success">
                    <div class="card-header" style="background-color:#77B1A1">
                        <h3 class="card-title">包装の⼨法 ・重量</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">

                        <div class="form-group">
                            <div>
                                <label for="Customer">
                                    <span style="margin-right:35px">product_W</span>
                                    <span style="margin-right:105px">D</span>
                                    <span style="margin-right:100px">H</span>
                                    <span>G</span>
                                </label>
                            </div>
                            <input type="text" value="{{ $product->product_size_w }}" class="form-control" id="product_size_w" name="product_size_w" style="width:15%;display:inline-block;">

                            <input type="text" value="{{ $product->product_size_d }}" class="form-control" id="product_size_d" name="product_size_d" style="width:15%;display:inline-block;">

                            <input type="text" value="{{ $product->product_size_h }}" class="form-control" id="product_size_h" name="product_size_h" style="width:15%;display:inline-block;">

                            <input type="text" value="{{ $product->product_weight }}" class="form-control" id="product_weight" name="product_weight" style="width:15%;display:inline-block;">

                        </div>

                        <div class="form-group">
                            <label for="Customer">input_number</label>
                            <input type="text" value="{{ $product->input_number }}" class="form-control" id="input_number" name="input_number" style="width:15%;">
                        </div>


                        <div class="form-group">
                            <div>
                                <label for="Customer">
                                    <span style="margin-right:15px">carton_size_w</span>
                                    <span style="margin-right:65px">size_D</span>
                                    <span style="margin-right:60px">size_H</span>
                                    <span style="margin-right:35px">weight_net</span>
                                    <span style="">weight_gross</span>
                                </label>
                            </div>

                            <input type="text" value="{{ $product->carton_size_w }}" class="form-control" id="carton_size_w" name="carton_size_w" style="width:15%;display:inline-block;">

                            <input type="text" value="{{ $product->carton_size_d }}" class="form-control" id="carton_size_d" name="carton_size_d" style="width:15%;display:inline-block;">

                            <input type="text" value="{{ $product->carton_size_h }}" class="form-control" id="carton_size_h" name="carton_size_h" style="width:15%;display:inline-block;">

                            <input type="text" value="{{ $product->carton_weight_net }}" class="form-control" id="carton_weight_net" name="carton_weight_net" style="width:15%;display:inline-block;">

                            <input type="text" value="{{ $product->carton_weight_gross }}" class="form-control" id="carton_weight_gross" name="carton_weight_gross" style="width:15%;display:inline-block;">

                        </div>


                        <div class="form-group">
                            <div><label for="Customer">carton_weight_m3</label></div>
                            <input type="text" value="{{ $product->carton_weight_m3 }}" class="form-control" id="carton_weight_m3" name="carton_weight_m3" style="width:15%;display:inline-block;">
                        </div>



                        <div class="form-group">
                            <label for="Customer">number_of_pieces</label>
                            <input type="text" value="{{ $product->number_of_pieces }}" class="form-control" id="number_of_pieces" name="number_of_pieces">
                        </div>


                        <div class="form-group">
                            <label for="Customer">ユニット数</label>
                            <input type="text" value="{{ $product->units }}" class="form-control" id="units" name="units">
                        </div>


                        <div class="form-group">
                            <label for="Customer">ユニットのタイプ</label>
                            <input type="text" value="{{ $product->unit_type }}" class="form-control" id="unit_type" name="unit_type">
                        </div>

                        <div class="form-group">
                            <label for="Customer">⾊</label>
                            <input type="text" value="{{ $product->color }}" class="form-control" id="color" name="color">
                        </div>

                        <div class="form-group">
                            <label for="Customer">カラーマップ</label>
                            <input type="text" value="{{ $product->color_map }}" class="form-control" id="color_map" name="color_map">
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>




            </div>

            <!-- /.col-md-6 -->
            <div class="col-lg-6">



                <div class="card card-success">
                    <div class="card-header" style="background-color:#77B1A1">
                        <h3 class="card-title">在庫数・納期</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="Customer">在庫数</label>
                            <input type="text" name="stock" id="stock" name="stock" class="form-control" value="{{ $product->stock }}" style="width:15%">
                        </div>


                        <div class="form-group">
                            <label for="Customer">deadline</label>
                            <input type="text" name="deadline" id="deadline" name="deadline" class="form-control" value="{{ $product->deadline }}" style="width:15%">
                        </div>


                        <div class="form-group">
                            <label for="Customer">stock_delivery_date</label>
                            <input type="text" name="stock_delivery_date" id="stock_delivery_date" class="form-control" value="{{ $product->stock_delivery_date }}" style="width:15%">
                        </div>


                        <div class="form-group">
                            <label for="Customer">manufacturing_delivery_date</label>
                            <input type="text" name="manufacturing_delivery_date" id="manufacturing_delivery_date" class="form-control" value="{{ $product->manufacturing_delivery_date }}" style="width:15%">
                        </div>

                    </div>
                </div>





                <div class="card card-success">
                    <div class="card-header" style="background-color:#77B1A1">
                        <h3 class="card-title">Fedex Commercial Invoice</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="Customer">explosives_un</label>
                            <input type="text" name="explosives_un" id="stock" class="form-control" value="{{ $product->explosives_un }}" style="width:15%">
                        </div>

                        <div class="form-group">
                            <label for="Customer">explosives_class</label>
                            <input type="text" name="explosives_class" id="explosives_class" class="form-control" value="{{ $product->explosives_class }}" style="width:15%">
                        </div>


                        <div class="form-group">
                            <label for="Customer">fedex_commercial_invoice_text</label>
                            <input type="text" name="fedex_commercial_invoice_text" id="fedex_commercial_invoice_text" class="form-control" value="{{ $product->fedex_commercial_invoice_text }}">
                        </div>


                        <div class="form-group">
                            <label for="Customer">fedex_commercial_invoice_hs_code</label>
                            <input type="text" name="fedex_commercial_invoice_hs_code" id="fedex_commercial_invoice_hs_code" class="form-control" value="{{ $product->fedex_commercial_invoice_hs_code }}">
                        </div>

                        <div class="form-group">
                            <label for="Customer">fedex_commercial_invoice_unit_value</label>
                            <input type="text" name="fedex_commercial_invoice_unit_value" id="fedex_commercial_invoice_unit_value" class="form-control" value="{{ $product->fedex_commercial_invoice_unit_value }}">
                        </div>

                        <div class="form-group">
                            <label for="Customer">dangerous_goods_declaration_sipping_name</label>
                            <input type="text" name="dangerous_goods_declaration_sipping_name" id="dangerous_goods_declaration_sipping_name" class="form-control" value="{{ $product->dangerous_goods_declaration_sipping_name }}">
                        </div>



                        <div class="form-group">
                            <label for="Customer">dangerous_goods_declaration_packing</label>
                            <input type="text" name="dangerous_goods_declaration_box_type" id="dangerous_goods_declaration_box_type" class="form-control" value="{{ $product->dangerous_goods_declaration_box_type }}">
                        </div>

                        <div class="form-group">
                            <label for="Customer">dangerous_goods_declaration_box_type</label>
                            <input type="text" name="dangerous_goods_declaration_packing" id="dangerous_goods_declaration_packing" class="form-control" value="{{ $product->dangerous_goods_declaration_packing }}">
                        </div>

                    </div>
                </div>



                <!-- general form elements -->
                <div class="card card-success">
                    <div class="card-header" style="background-color:#77B1A1">
                        <h3 class="card-title">商品説明</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">
                        <div class="form-group">
                            <label>商品説明1</label>
                            <textarea class="form-control" rows="4" id="product_description1" name="product_description1"></textarea>
                        </div>

                        <div class="form-group">
                            <label>商品説明2</label>
                            <textarea class="form-control" rows="4" id="product_description2" name="product_description2"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-body">
                        <div class="form-group">
                            <div class="card">

                                <label for="Customer">id</label>
                                <input type="text" name="id" id="id" class="form-control" value="{{ $product->id }}">
                            </div>
                        </div>
                    </div>
                </div>
                </form>

                <!-- general form elements -->
                <div class="card card-success">
                    <div class="card-header" style="background-color:#77B1A1">
                        <h3 class="card-title">画像</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->


                    <div class="card-body">
                        <div class="form-group">
                            <div class="card" style="width:25%;display:inline-block;">

                                <div class="card-body">
                                    @if (!empty($product->img1))
                                    <img src="{{ asset( 'storage/img/' .$product->img1) }}" width="100px">
                                    @endif
                                    <form method="POST" action="products/img_store" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="img1">
                                        <button>アップロード</button>
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                    </form>
                                </div>
                            </div>


                            <div class="card" style="width:25%;display:inline-block;">

                                <div class="card-body">
                                    @if (!empty($product->img2))
                                    <img src="{{ asset( 'storage/img/' .$product->img2) }}" width="100px">
                                    @endif
                                    <form method="POST" action="products/img_store2" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="img2">
                                        <button>アップロード</button>
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                    </form>
                                </div>
                            </div>


                            <div class="card" style="width:25%;display:inline-block;">

                                <div class="card-body">
                                    @if (!empty($product->img3))
                                    <img src="{{ asset( 'storage/img/' .$product->img3) }}" width="100px">
                                    @endif
                                    <form method="POST" action="products/img_store3" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="img3">
                                        <button>アップロード</button>
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                    </form>
                                </div>
                            </div>


                            <div class="card" style="width:25%;display:inline-block;">

                                <div class="card-body">
                                    @if (!empty($product->img4))
                                    <img src="{{ asset( 'storage/img/' .$product->img4) }}" width="100px">
                                    @endif
                                    <form method="POST" action="products/img_store4" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="img4">
                                        <button>アップロード</button>
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                    </form>
                                </div>
                            </div>


                            <div class="card" style="width:25%;display:inline-block;">

                                <div class="card-body">
                                    @if (!empty($product->img5))
                                    <img src="{{ asset( 'storage/img/' .$product->img5) }}" width="100px">
                                    @endif
                                    <form method="POST" action="products/img_store5" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="img5">
                                        <button>アップロード</button>
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                    </form>
                                </div>
                            </div>


                            <div class="card" style="width:25%;display:inline-block;">

                                <div class="card-body">
                                    @if (!empty($product->img6))
                                    <img src="{{ asset( 'storage/img/' .$product->img6) }}" width="100px">
                                    @endif
                                    <form method="POST" action="products/img_store6" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="img6">
                                        <button>アップロード</button>
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>






                    <div class="card-body">
                        <div class="form-group">
                            <div class="card">

                                <label for="Customer">sds_file_upload</label>
                                <input type="text" name="id" id="id" class="form-control" value="{{ $product->sds_file_upload }}">
                                <input id="image" type="file" name="image">
                            </div>
                        </div>
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