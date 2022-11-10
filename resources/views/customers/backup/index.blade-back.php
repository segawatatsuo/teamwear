@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!--<h1>商品一覧</h1>-->
                    <h3 style="display: inline;vertical-align: middle;margin-right: 10px;">顧客一覧</h3>
                    <a class="btn btn-info" href="{{ route('customers.create') }}">新規登録</a>
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
                            <h3 class="card-title">customers list</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>顧客ID</th>
                                        <th>会社名</th>
                                        <th>国</th>
                                        <th>登録日</th>
                                        <th>業種</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td><a href="{{ route('customers.show', $customer->id) }}">{{ $customer->id }}</a></td>
                                            <td><a href="{{ route('customers.show', $customer->id) }}">{{ $customer->company_name }}</a></td>
                                            <td>{{ $customer->country }}</td>
                                            <td> {{ $customer->created_at }}</td>
                                            <td>{{ $customer->industry }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    {{ $customers->links() }}
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
