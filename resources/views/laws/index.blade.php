@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!--<h1>商品一覧</h1>-->
                    <h3 style="display: inline;vertical-align: middle;margin-right: 10px;">特定商取引に関する法律に基づく表記</h3>
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

                    <form action="/newpostsend" method="post">
                        @csrf
                        <p>タイトル</p>
                        <input type="text" name="title" class="formtitle">
                        <p>&nbsp;</p>
                        <p>本文</p>
                        <!-- <textarea name="main" cols="40" rows="10"></textarea> -->
                        <div id="editor" style="height: 200px;"></div>
                        <p>&nbsp;</p>
                        <input type="submit" class="submitbtn">
                    </form>


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
    <!-- Quill -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

@stop

@section('js')
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>
@stop
