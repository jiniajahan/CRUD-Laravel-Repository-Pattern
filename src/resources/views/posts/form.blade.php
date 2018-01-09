{!! csrf_field() !!}


<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

    <label for="title" class="control-label">
        {{ trans('title') }}
    </label>

    <input type="text"
           name="title"
           id="title"
           value="{{ old('title', @$post->title) }}"
           placeholder="title"
           required
           class="form-control">

    @if ($errors->has('title'))
        <div class="help-block">
            {{ $errors->first('title') }}
        </div>
    @endif
</div>
<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">

    <label for="title" class="control-label">
        {{ trans('title') }}
    </label>

    <input type="text"
           name="title"
           id="title"
           value="{{ old('title', @$post->body) }}"
           placeholder="title"
           required
           class="form-control">

    @if ($errors->has('body'))
        <div class="help-block">
            {{ $errors->first('body') }}
        </div>
    @endif
</div>


<div class="form-group">
    <button type="submit" class="btn btn-success">Save</button>
    <a href="/posts" class="btn btn-default">Back to list</a>
</div>

