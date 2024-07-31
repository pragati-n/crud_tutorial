@extends("main")

@section("content")
	
	@foreach($articles as $article)
	<ul>
		<li><a href="{{  url('/articles',$article->id ) }}">{{ $article->item }}</a></li>
		<li>{{ $article->done_flag }}</li>
		@if($article->published_at)<li>{{ $article->published_at }}</li>@endif
	</ul>
	@endforeach
	
@stop