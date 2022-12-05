@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 style="display: inline;vertical-align: middle;margin-right: 10px;">会社情報</h3>


                        <form method="post" action={{ route('companies.update', $company->id) }} style="display: inline;">
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

                    <!-- general form elements -->
                    <div class="card card-success">
                        <!--
                        <div class="card-header" style="background-color:#77B1A1">
                            <h3 class="card-title">会社情報</h3>
                        </div>
                    -->
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="content">会社名</label>
                                    <input type="text" value="{{ $company->company_name }}" class="form-control"
                                        id="company_name" name="company_name" style="width:100%">
                                </div>

                                <div class="form-group">
                                    <label for="person">郵便番号</label>
                                    <input type="text" value="{{ $company->zip_code }}" class="form-control"
                                        id="zip_code" name="zip_code" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="address1">住所1</label>
                                    <input type="text" value="{{ $company->address1 }}" class="form-control"
                                        id="address1" name="address1" style="width:100%">
                                </div>

                                <div class="form-group">
                                    <label for="tel_number">電話</label>
                                    <input type="text" value="{{ $company->tel_number }}" class="form-control"
                                        id="tel_number" name="tel_number" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="tel_number2">電話2</label>
                                    <input type="text" value="{{ $company->tel_number2 }}" class="form-control"
                                        id="tel_number2" name="tel_number2" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="fax_number">FAX</label>
                                    <input type="text" value="{{ $company->fax_number }}" class="form-control" id="fax_number"
                                        name="fax_number" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="mail">メールアドレス</label>
                                    <input type="text" value="{{ $company->order_mail }}" class="form-control"
                                        id="order_mail" name="order_mail" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="manager">店舗運営責任者</label>
                                    <input type="text" value="{{ $company->manager }}" class="form-control"
                                        id="manager" name="manager" style="width:50%">
                                </div>

                                <div class="form-group">
                                    <label for="copyright">コピーライト</label>
                                    <input type="text" value="{{ $company->copyright }}" class="form-control"
                                        id="copyright" name="copyright" style="width:50%">
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
