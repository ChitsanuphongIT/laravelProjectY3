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
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <strong>รายการ</strong>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>email</th>
                        <th>วันที่สร้าง</th>
                        <th>การทำงาน</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_users as $people)
                        <tr>
                            <td>{{ $people->id }}</td>
                            <td>{{ $people->name }}</td>
                            <td>{{ $people->email }}</td>
                            <td>{{ $people->created_at }}</td>
                            <td>
                                <a href="/customer/action/{{ $people->id }}" class="btn btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn_delete btn btn-danger">
                                    <input type="hidden" class="product_id" value="{{ $people->id }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>

    </div>

</div>


@endsection