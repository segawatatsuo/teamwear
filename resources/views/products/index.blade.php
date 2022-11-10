@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <form method="post" style="display: inline;">
        @csrf
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!--<h1>商品一覧</h1>-->
                        <h3 style="display: inline;vertical-align: middle;margin-right: 10px;">商品一覧</h3>

                        <a class="btn btn-info" href="{{ route('products.create') }}">新規商品登録</a>

                        <input formaction="{{ 'products.front_update' }}" type="submit" class="btn btn-primary"
                            value="更新">

                    </div>
                </div>
            </div>
        </section>
    @stop

    @section('content')

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!--バリデーションエラー -->
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach


                        <!-- フラッシュメッセージ -->
                        @if (session('flash_message'))
                            <div class="flash_message bg-success text-center py-3 my-0 mb-3">
                                {{ session('flash_message') }}
                            </div>
                        @endif



                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">products list</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:5%">ID</th>
                                    
                                            <th>商品番号</th>
                                            <th>メーカー</th>
                                            <th>商品名</th>
                                            <th>販売価格</th>
                                            <th>競技種別</th>
                                            <th>商品分類</th>
                                            <th>genre</th>
                                            <th>非表示</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($products as $product)
                                            <tr>
                                                <td><a href="{{route('products.show', $product->id)}} ">{{ $product->id }}</a></td>
                                                <td>{{ $product->item_code }}</td>
                                                <td>{{ $product->maker }}</td>
                                                <td>{{ $product->item_name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->category }}</td>
                                                <td>{{ $product->classification }}</td>
                                                <td>{{ $product->genre }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        {{ $products->links() }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </form>






@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>




@stop
