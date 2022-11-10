@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!--<h1>商品一覧</h1>-->
                    <h3 style="display: inline;vertical-align: middle;margin-right: 10px;">会社情報</h3>
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

                    <!-- フラッシュメッセージ -->
                    @if (session('flash_message'))
                        <div class="flash_message bg-success text-center py-3 my-0 mb-3">
                            {{ session('flash_message') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">orders list</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>受注日</th>
                                        <th>名前</th>
                                        <th>ステータス</th>
                                        <th>支払方法</th>
                                        <th>合計金額</th>
                                        <th>追跡番号</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($orders as $order)--}}
                                        <tr>
                                            <td><a href="{{-- route('orders.show',$order->id) --}}">{{-- $order->order_no --}}</a></td>
                                            <td>{{-- $order->order_date --}}</td>

                                            <td>{{-- $order->consignee --}}</td>

                                            <td>{{-- $order->status --}}</td>
                                            <td> {{-- $order->payment_method --}}</td>
                                            <td>{{-- $order->total_amount --}}</td>
                                            <td>{{-- $order->delivery_method --}}</td>

                                        </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                            <br>
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    {{-- $orders->links() --}}
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

    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
