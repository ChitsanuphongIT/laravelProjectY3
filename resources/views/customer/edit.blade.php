@extends('layout.master')

@section('title') BikeShop | Customer detial @endsection

@section('tag_head')
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
@endsection

@section('content')
<div class="breadcrumb">
    <li><a href="{{ URL::to('home') }}"><i class="fa fa-home"></i> หน้าร้าน</a></li>
    <li><a href="{{ URL::to('customer') }}"> Customer</a></li>
    <li class="active">Customer detial</li>
</div>

{{-- @if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif --}}

<div class="panel panel-default">
    <div class="panel-header">
        <h1 style="margin: 40px 10px;">แก้ไขผู้ใช้</h1>
    </div>
    
    <div class="panel-body">
        <input type="hidden" name="id" value="{{ $user->id }}">
        <table>
            <tr style="height: 48px;">
                <td style="width: 240px">
                    {{ Form::label('name', 'ชื่อผู้ใช้ ') }}</td>
                <td>{{ Form::text('name', $user->name, ['class' => 'form-control']) }}</td>
            </tr>
            <tr style="height: 48px;">
                <td style="width: 240px">
                    {{ Form::label('stock_qty', 'อีเมล์') }}</td>
                <td>{{ Form::text('stock_qty', $user->email, ['class' => 'form-control']) }} </td>
            </tr>
        </table>
    </div>

    <div class="panel-footer">
        <a href="/customer" class="btn btn-danger">ยกเลิก</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก</button>
    </div>
</div>

{!! Form::close() !!}

@endsection