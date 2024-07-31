


 @extends("main")

@section("content")

<div class="bogs_div">
    <h2>{{ $post->title }} </h2>
    <p>{{ $post->body }}</p>
    
</div>

<a href="/blogs">All blogs</a>
@stop 