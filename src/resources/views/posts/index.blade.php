@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Posts</div>

                    <div class="panel-body">
                        @foreach($posts as $post)
                            <div class="left">
                                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a>
                                    <small>Created by {{ $post->user->name }}</small>
                                </h3>
                            </div>
                           <div class="right">
                               <small>At: {{ $post->created_at->diffForHumans() }}</small>
                           </div>

                            <div>{{ $post->body }}</div>
                        @if(Auth::user())

                                <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Read</a>
                                @can('update', $post)
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('post.delete', $post->id) }}" class="btn btn-danger"
                                   onclick="return confirm('Are you sure to delete this page?');">
                                    Delete
                                </a>
                                @endcan
                            @endif

                        @endforeach
                    </div>

                </div>
                <div class="paginator">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection





