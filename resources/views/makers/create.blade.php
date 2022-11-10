@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <form action="{{ route('makers.store') }}" method="post">
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
                                <h3 class="card-title">メーカー情報</h3>
                            </div>
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Customer">会社名</label>
                                    <input type="text" value=""
                                        class="form-control" id="content" name="content" style="width:100%">
                                </div>

                                <div class="form-group">
                                    <label for="Customer">担当者</label>
                                    <input type="text" value=""
                                        class="form-control" id="person" name="person" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="Customer">住所</label>
                                    <input type="text" value=""
                                        class="form-control" id="address" name="address" style="width:100%">
                                </div>

                                <div class="form-group">
                                    <label for="Customer">電話</label>
                                    <input type="text" value="" class="form-control"
                                        id="tel" name="tel" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="Customer">FAX</label>
                                    <input type="text" value="" class="form-control"
                                        id="fax" name="fax" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="Customer">Mail</label>
                                    <input type="text" value="" class="form-control"
                                        id="mail" name="mail" style="width:50%">
                                </div>

                           </div>
                            <!-- /.card-body -->
                    </div>
                        </form>
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
