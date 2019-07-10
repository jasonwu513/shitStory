@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">PuPuboard</div>
                <a class="btn btn-primary add-btn" href="{{ url('post/create')}}">新增</a>
                <div class="panel-body">
                <table class="table">

                    @foreach($posts as $key => $post)
                        <!-- <tr>
                           <td>{{ $post->user->name }}</td>
                           <td>{{ $post->title }}</td>
                           <td>{{ $post->content }}</td>
                           <td><a href="{{ url('post',$post->id)}}">查詢</a></td>
                           <td><a href="{{ url('post/'.$post->id.'/edit')}}">編輯</a></td>
                           <td>
                           <form action="{{ url('post',$post->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <input type="submit" class="btn btn-" value="刪除">
                           </form>

                           </td>
                        </tr> -->
                      <div class="container admin">
                        <div class="row">


                              <div class="col-lg-6 col-md-12">
                                <!-- <div class="container"> -->
                                  <div class="row">
                                    <div class="col-xs-3 admin-tumbnail">
                                      <!-- <iframe src="{{$post->thumbnail}}"></iframe> -->
                                      <img  src="{{$post->thumbnail}}" alt="thumbnail">
                                    </div>
                                    <div class="col-xs-3">
                                      {{ $post->user->name }}
                                    </div>
                                    <div class="col-xs-3">
                                      {{ $post->created_at }}
                                    </div>
                                  </div>
                                <!-- </div> -->
                              </div>
                              <div class="col-lg-6 col-md-12">

                                  <!-- <div class="container"> -->
                                    <div class="row">
                                      <div class="col-xs-3">
                                        <a class="btn btn-primary" href="{{ url('post',$post->id)}}">查詢</a>
                                      </div>
                                      <div class="col-xs-3">
                                        <a class="btn btn-primary" href="{{ url('post/'.$post->id.'/edit')}}">編輯</a>
                                      </div>
                                      <div class="col-xs-3">
                                        <form action="{{ url('post',$post->id) }}" method="post">
                                             {{ csrf_field() }}
                                             {{ method_field('delete') }}
                                             <input type="submit" class="btn btn-danger" value="刪除">
                                        </form>
                                      </div>
                                    </div>
                                  <!-- </div> -->
                                </div>
                              </div>

                        </div>
                      </div>

                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
