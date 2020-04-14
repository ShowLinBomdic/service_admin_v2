@extends('layouts.main')



@section('wrapper')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @yield('page_title')
                </div>
                <div class="col-sm-6">
                    @yield('breadcrumb')
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @yield('content')

    </section>
    <!-- /.content -->
</div>
@endsection
