@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ダッシュボード</h1>
@stop

@section('content')
    <h4>ユニフォームラボ管理画面</h4>

    <div class="card" style="width: 100%;">
        <div class="card-header">
          注文
        </div>
        <div class="card-body">
          <p class="card-text">●件</p>
        </div>
      </div>

      <div class="card" style="width: 100%;">
        <div class="card-header">
          ストア管理
        </div>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

  
@stop

@section('css')
    {{-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/xxx.css">
    --}}
@stop

@section('js')
    <script> console.log('ページごとJSの記述'); </script>
@stop