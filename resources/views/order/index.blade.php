@extends('layout.master')

@section('title') BikeShop | Order @endsection

@section('tag_head')
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
@endsection

@section('content')

<div class="container" ng-app="app" ng-controller="controller">
    <h1>Order</h1>
    <div class="breadcrumb">
        <li><a href="{{ URL::to('home') }}"><i class="fa fa-home"></i> หน้าร้าน</a></li>
        <li class="active">Order</li>
    </div>

    {{-- @if(count($cart_items)) --}}

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <strong>รายการสั่งซื้อสินค้า</strong>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>OrderID</th>
                        <th>เลขที่ใบสั่งซื้อ</th>
                        <th>ชื่อลูกค้า</th>
                        <th>วันที่สั่งซื้อสินค้า</th>
                        <th>รายละเอียด</th>
                        <th>สถานะการชําระเงิน</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->order_ref }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td><a href="{{ URL::to('detail/'.$item->id )}}">รายละเอียด</a></td>
                            <td>{{ $item->status}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <ul>
            @foreach ($orders as $item)
                <li> <a href="{{URL::to('order/detail/'.$item->id)}}"> {{json_encode($item)}}  </li>
            @endforeach
            
        </ul> --}}

    </div>

</div>


@endsection