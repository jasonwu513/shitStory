@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <a href="{{ url('post/create')}}">新增</a>
                <div class="panel-body">
                <table class="table">
                    @foreach($posts as $post)
                        <tr>
                           <td>{{ $post->title }}</td>
                           <td>{{ $post->content }}</td>
                           <td><a href="{{ url('post',$post->id)}}">查詢</a></td>
                           <td><a href="{{ url('post/'.$post->id.'/edit')}}">編輯</a></td>
                           <td>
                           <form action="{{ url('post',$post->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <input type="submit" value="刪除">
                           </form>
                                
                           </td>
                        </tr>
                    @endforeach               
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
