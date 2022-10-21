@extends('layout.master')

@section('title') BikeShop | Detail Order @endsection

@section('tag_head')
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
@endsection

@section('content')

<div class="container" ng-app="app" ng-controller="controller">
    <h1>Detail Order</h1>
    <div class="breadcrumb">
        <li><a href="{{ URL::to('home') }}"><i class="fa fa-home"></i> หน้าร้าน</a></li>
        <li class="active">Detail Order</li>
        <li class="active">Detail of PD12451259592</li>
    </div>

    {{-- @if(count($cart_items)) --}}

    <div class="panel panel-default">
        {{json_encode($order_details)}}

    </div>

</div>



@endsection