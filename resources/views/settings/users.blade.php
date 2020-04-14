@extends('layouts.page')

@section('page_title')
    <h1>HOME</h1>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
    </ol>
@endsection

@section('sidebar')
    <x-sidebar :active="[3,2]"/>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-info-circle" style="color: red;"></i>&nbsp;INFO
                        </h3>

                        {{--<div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>--}}
                    </div>
                    <div class="card-body">
                        Welcome! <strong>{{Auth::user()->name}}</strong>
                    </div>
                    <!-- /.card-body -->
                {{--<div class="card-footer">
                    Footer
                </div>--}}
                <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
