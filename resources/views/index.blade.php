@extends('layout.master')

@section('title')    Title: index    @endsection


@section('content')
    <div class="panel panel-primary">
                    
        <div class="panel-heading">
            <div class="panel-title">
                <strong>หัวข้อ</strong>
            </div>
        </div>
        
        <div class="panel-body">        
            <a href="#" class="btn btn-default"><i class="fa-solid fa-house"></i> หน้าหลัก </a>
            <a href="#" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก</a>
            <a href="#" class="btn btn-info"><i class="fa fa-edit"></i> แก้ไข</a>
            <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> ลบ</a>
        </div>

    </div>





@endsection
