@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3 style="display: inline;vertical-align: middle;margin-right: 10px;">Mail</h3>
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


                    <!-- /.card-header -->
                    <div class="card-body">

                        <form method="post">
                            @csrf

                            <div class="col-md-9">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">ご注文ありがとうございましたメール</h3>
                                    </div>

                                    <div class="card-body">

                                        <div class="form-group">
                                            <input class="form-control" placeholder="Subject:">
                                        </div>











                                        


                                        <div class="card-footer">
                                            <div class="float-right">
                                                <input formaction="{{ 'mail.update' }}" type="submit"
                                                    class="btn btn-primary" value="更新">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </form>
                    </div>
                    
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
