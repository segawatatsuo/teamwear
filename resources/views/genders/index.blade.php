@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<form method="post" style="display: inline;">
    @csrf
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3 style="display: inline;vertical-align: middle;margin-right: 10px;">性別</h3>

                    <a class="btn btn-info" href="{{ route('genders.create') }}">新規登録</a>

                </div>
            </div>
        </div>
    </section>
@stop

    @section('content')

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">

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



                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">genders list</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <tbody>
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:5%">ID</th>
                                                    <th>登録日</th>
                                                   <th>年齢</th>
                                                </tr>
                                            </thead>
                                            <tbody>
        
                                                @foreach ($genders as $gender)
                                                    <tr>
                                                        <td><a href="{{route('genders.show', $gender->id)}} ">{{ $gender->id }}</a></td>
                                                        <td>{{ $gender->created_at }}</td>
                                                        <td>{{ $gender->content }}</td>
        
                                                   </tr>
                                                @endforeach
        
                                            </tbody>
                                        </table>
                                    </tbody>
                                </table>
                                <br>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        {{-- $products->links() --}}
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
    </form>






@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>




@stop
