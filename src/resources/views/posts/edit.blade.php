@extends('layouts.app')

@section('content')
    <div class="container">

        <form method="POST" action="/posts/{{$post->id}}">

            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="clearfix">
                <div class="pull-left">
                    <div class="lead">
                        <strong>Edit page</strong>
                        <small>{{ $post->title }}</small>
                    </div>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/posts" class="btn btn-default">Back to list</a>
                </div>
            </div>
            <hr>

            @include('posts.form')
        </form>

    </div>
@endsection


