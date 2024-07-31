@extends("main")

@section("content")

<div class="bogs_div">
    @foreach($posts as $post)
        <h2><a href="/blogs/{{ $post->slug }}">{!! $post['title']!!} </a></h2>
        <p>{!! $post['body'] !!}</p>
    @endforeach
    
</div>


@stop