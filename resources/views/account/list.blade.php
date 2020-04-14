@extends('layouts.page')

@section('page_title')
    <h1>Account</h1>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('account.list')}}">Account</a></li>
    </ol>
@endsection

@section('sidebar')
    <x-sidebar :active="[1]"/>
@endsection

@section('content')

@endsection
