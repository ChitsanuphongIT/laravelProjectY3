@extends('layout.master')

@section('title') BikeShop | Customer @endsection

@section('tag_head')
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
@endsection

@section('content')

<div class="container" ng-app="app" ng-controller="controller">
    <h1>Customer</h1>
    <div class="breadcrumb">
        <li><a href="{{ URL::to('home') }}"><i class="fa fa-home"></i> หน้าร้าน</a></li>
        <li class="active">Customer</li>
    </div>

    {{-- @if(count($cart_items)) --}}

    <div class="panel panel-default">
   

    </div>

</div>


@endsection