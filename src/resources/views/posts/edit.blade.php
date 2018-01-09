@extends('layouts.menu')

@section('content')
    <div class="container">

        <form method="POST" action="/page/{{ $post->id }}">

            <div class="clearfix">
                <div class="pull-left">
                    <div class="lead">
                        <strong>Edit page</strong>
                        <small>{{ $post->title }}</small>
                    </div>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="/page" class="btn btn-default">Back to list</a>
                </div>
            </div>
            <hr>

            {!! method_field('PUT') !!}
            @include('posts.form')
        </form>

    </div>
@endsection
