@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">File Upload</div>

                    <div class="panel-body">
                        <form method="post" action="{{ route('file.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <input type="file" name="image">
                            </div>
                            <input type="submit" value="Upload">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
