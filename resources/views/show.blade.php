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
                        <label for="">標題</label>
                        {{ $post->title }}
                        <label for="">內容</label>
                        {{ $post->content }}
                        <br/>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
