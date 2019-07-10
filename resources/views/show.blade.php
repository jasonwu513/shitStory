@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ url('post') }}" method="post">
                        {{ csrf_field() }}
                        <div class="showdata">
                          <label for="">PUPU 美照</label>
                          <img class="showimage" src="{{$post->thumbnail}}" alt="thumbnail">
                        </div>
                        <div class="showdata">
                          <label for="">寶寶便便卡</label>

                          <img class="showimage" src="{{ asset('/img/sheetmodel.jpg') }}" alt="thumbnail">
                        </div>
                        <div class="showdata">
                          <label for="">時間</label>
                          {{ $post->created_at }}
                        </div>
                        <div class="showdata">
                          <label for="">標題</label>
                          {{ $post->title }}
                        </div>
                        <div class="showdata">
                          <label for="">內容</label>
                          {{ $post->content }}
                        </div>

                        




                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
