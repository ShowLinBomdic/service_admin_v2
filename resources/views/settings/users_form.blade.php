@extends('layouts.page')

@section('page_title')
    <h1>Users</h1>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item">後端設定</li>
        <li class="breadcrumb-item"><a href="{{route('settings.users.list')}}">Users</a></li>
    </ol>
@endsection

@section('sidebar')
    <x-sidebar :active="[]"/>
@endsection

@section('css')

@endsection

@section('js')

@endsection

@section('content')








    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-search"></span>&nbsp;搜尋
                            <span class="pull-right"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;總計：共&nbsp;42&nbsp;筆資料</span>
                        </h3>
                    </div>
                    <div class="panel-body form-inline">
                    <!--<input class="form-control" placeholder="群組名稱" name="title" value="<?/*=isset($search['title'])?$search['title']:''*/?>">-->
                        <div class="btn-group pull-right">
                            <!--<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-export"></span>&nbsp;匯出</button>-->
                            <button type="button" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-search"></span>&nbsp;查詢</button>
                            <button type="button" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-paperclip"></span>&nbsp;新增</button>
                        </div>
                    </div>

                    <div class="panel-footer">
                    <!--<input class="form-control" placeholder="群組名稱" name="title" value="<?/*=isset($search['title'])?$search['title']:''*/?>">-->
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-search"></span>&nbsp;查詢</button>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>






                <!-- /.card -->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Name</label>
                                <input type="email" class="form-control" id="user" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">送出</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
