@extends("main")

@section("content")
	
	
	<ul>
		<li>{{ $article->item }} </li>
		<li>{{ $article->done_flag }}</li>
		@if($article->published_at)<li>{{ $article->published_at }}</li>@endif
	</ul>	
@stop