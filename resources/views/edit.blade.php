@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ url('post',$post->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <label for="">圖片</label>
                        <img class="showimage" src="{{$post->thumbnail}}" alt="thumbnail">
                        <label for="">標題</label>
                        <input class="form-control" type="text" name="title" value="{{ $post->title }}">
                        <label for="">內容</label>
                        <textarea class="form-control" name="content" id="" cols="30" rows="10">
                            {{ $post->content }}
                        </textarea>
                        <br/>
                        <input class="btn btn-primary" type="submit" value="更新">

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
