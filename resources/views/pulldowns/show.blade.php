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
                    <button formaction="{{ route('ages.destroy',$age->id) }}" type="submit" class="btn btn-danger" onclick='return confirm("削除しますか？");'>削除</button>
                    </form>
                    
                    <form method="post" action={{ route('ages.update',$age->id) }} style="display: inline;">
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
                                <h3 class="card-title">カテゴリー</h3>
                            </div>
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="category">名称</label>
                                    <input type="text" value="{{ $age->content }}"
                                        class="form-control" id="content" name="content" style="width:100%">
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
