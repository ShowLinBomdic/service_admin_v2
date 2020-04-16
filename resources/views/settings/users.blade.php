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
    <x-sidebar :active="[2,2,1]"/>
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
                        <h3 class="panel-title"><span class="glyphicon glyphicon-search"></span>&nbsp;搜尋</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-4">
                                <input class="form-control" placeholder="user id" name="user_id" value="">
                            </div>
                            <div class="col-4">
                                <input class="form-control" placeholder="user name" name="user_id" value="">
                            </div>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <span class="fa fa-info-circle"></span>&nbsp;總計：共&nbsp;2771&nbsp;筆資料
                        <div class="btn-group pull-right">
                            <a href="#" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span>&nbsp;查詢</a>
                            <a href="{{route('settings.users.create')}}" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-paperclip"></span>&nbsp;新增</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>



                <!-- /.card -->

                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;User List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped _responsive_data_table">
                            <thead>
                                <tr>
                                    <th>UserName</th>
                                    <th>Email</th>
                                    <th>xxxxxx</th>
                                    <th>xxxxxx</th>
                                    <th>功能</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Admin</td>
                                    <td>axxxxx@gmail.com</td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td align="center">
                                        <a href="#" class="btn btn-sm btn-outline-info">
                                            <i class="fa fa-edit"></i>&nbsp;編輯
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Admin</td>
                                    <td>bbbbbb@gmail.com</td>
                                    <td>Win 95+</td>
                                    <td> 5</td>
                                    <td align="center">
                                        <a href="#" class="btn btn-sm btn-outline-info">
                                            <i class="fa fa-edit"></i>&nbsp;編輯
                                        </a>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer _pagination_insert">



                        <ul class="pagination m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>

                    </div>


                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
