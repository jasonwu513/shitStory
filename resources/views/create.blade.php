@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ url('post') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <label>Thumbnail</label>
                        <input type="file"  id = "thumbnail" name = "thumbnail" capture="camera">
                        <label for="">日期</label>
                        <input class="form-control" type="date" name="pupudate" value="<?php echo date('Y-m-d'); ?>">
                        <label for="">時間</label>
                        <input class="form-control" type="time" name="puputime" value="<?php echo date('H:i:s'); ?>">
                        <label for="">標題</label>
                        <input class="form-control" type="text" name="title">
                        <label for="">內容</label>
                        <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                        <br/>
                        <input class="btn btn-default" type="submit" value="新增">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
