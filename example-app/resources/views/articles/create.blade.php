@extends("main")

@section("content")
   <form action ="{{ url('/articles/store/') }}" method="POST">
    @csrf
        <label for="items">Enter title</label>
        <input type="text" name="items">
        <input type="submit" name="btn_submit" value="submit">
    </form>
@stop