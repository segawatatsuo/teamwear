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
                    <button formaction="{{ route('companies.destroy',$company->id) }}" type="submit" class="btn btn-danger" onclick='return confirm("削除しますか？");'>削除</button>
                    </form>

                    <form method="post" action={{ route('companies.update',$company->id) }} style="display: inline;">
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
                                    <input type="text" value="{{ $company->id }}"
                                        class="form-control" id="id" name="id" style="width:20%" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="content">会社名</label>
                                    <input type="text" value="{{ $company->company_name }}"
                                        class="form-control" id="content" name="content" style="width:100%">
                                </div>

                                <div class="form-group">
                                    <label for="person">郵便番号</label>
                                    <input type="text" value="{{ $company->zip_code }}"
                                        class="form-control" id="zip_code" name="zip_code" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="address1">住所1</label>
                                    <input type="text" value="{{ $company->address1 }}"
                                        class="form-control" id="address1" name="address1" style="width:100%">
                                </div>

                                <div class="form-group">
                                    <label for="address2">住所2</label>
                                    <input type="text" value="{{ $company->address2 }}"
                                        class="form-control" id="address2" name="address2" style="width:100%">
                                </div>



                                <div class="form-group">
                                    <label for="tel_number">電話</label>
                                    <input type="text" value="{{ $company->tel_number }}" class="form-control"
                                        id="tel_number" name="tel_number" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="fax_number">FAX</label>
                                    <input type="text" value="{{ $company->fax }}" class="form-control"
                                        id="fax_number" name="fax_number" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="mail">order_mail</label>
                                    <input type="text" value="{{ $company->order_mail }}" class="form-control"
                                        id="order_mail" name="order_mail" style="width:50%">
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