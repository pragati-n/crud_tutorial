@extends("main")

	@section("content")
		@foreach($data as $key => $val)
		
			@if ($key%2 ==0)
			<br>
				{{ $val["id"] }} = {{ $val["name"] }}= {{ $val["age"] }}
			@endif
		@endforeach
	@stop
