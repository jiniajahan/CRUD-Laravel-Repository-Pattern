@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Post create</div>

                    <div class="panel-body">
                        <form method="post" action="/posts">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Tile</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Post Body</label>
                                <input type="text" name="body" class="form-control" id="exampleInputPassword1" placeholder="body">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>

                            @if(count($errors))
                            <div class="alert alert-danger">

                                @foreach($errors->all() as $error)
                                    <ul>
                                        <li>{{$error}}</li>
                                    </ul>
                                @endforeach
                            </div>
                                @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
