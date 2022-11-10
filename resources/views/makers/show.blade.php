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
                    <button formaction="{{ route('makers.destroy',$maker->id) }}" type="submit" class="btn btn-danger" onclick='return confirm("削除しますか？");'>削除</button>
                    </form>
                    
                    <form method="post" action={{ route('makers.update',$maker->id) }} style="display: inline;">
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
        <div class="row">

            <div class="col-lg-6">

                <!-- general form elements -->
                <div class="card card-success">
                    <div class="card-header" style="background-color:#77B1A1">
                        <h3 class="card-title">メーカー</h3>
                    </div>
                    <!-- /.card-header -->
                        <div class="card-body">

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="id">ID</label>
                                    <input type="text" value="{{ $maker->id }}"
                                        class="form-control" id="id" name="id" style="width:20%" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="content">会社名</label>
                                    <input type="text" value="{{ $maker->content }}"
                                        class="form-control" id="content" name="content" style="width:100%">
                                </div>

                                <div class="form-group">
                                    <label for="person">担当者</label>
                                    <input type="text" value="{{ $maker->person }}"
                                        class="form-control" id="person" name="person" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="address">住所</label>
                                    <input type="text" value="{{ $maker->address }}"
                                        class="form-control" id="address" name="address" style="width:100%">
                                </div>

                                <div class="form-group">
                                    <label for="tel">電話</label>
                                    <input type="text" value="{{ $maker->tel }}" class="form-control"
                                        id="tel" name="tel" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="fax">FAX</label>
                                    <input type="text" value="{{ $maker->fax }}" class="form-control"
                                        id="fax" name="fax" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="mail">Mail</label>
                                    <input type="text" value="{{ $maker->mail }}" class="form-control"
                                        id="mail" name="mail" style="width:50%">
                                </div>

                           </div>
                            <!-- /.card-body -->

                        </form>
                        </div>
                        <!-- /.card-body -->
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