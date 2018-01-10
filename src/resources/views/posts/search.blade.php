<div class="search-content">
    <form action="{{ route('post.index') }}" method="get" class="form-inline">
        <input type="text" class="form-control" name="s" placeholder="your query" value="{{ isset($s) ? $s: '' }}">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
</div>