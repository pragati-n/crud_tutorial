@extends('posts.layout')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
        </div>
    </div>
</div>

@if( $errors->any())

<div class=" alert alert-danger">
    <strong>Error!</strong>
   
    @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
    @endforeach
</div>
@endif

@section('content')
@php
    $action_method = route('posts.store');  
    $post_name = "";       
    $post_detail = "";    
    if ( !empty($post) )  
    {
        $action_method =  route('posts.update',$post->id);
        $post_name =  $post->name;       
        $post_detail =  $post->detail;       
    }
 @endphp
        <form action=" {{ $action_method }}" method="POST">
            @csrf
            @if ( !empty($post) )  
              @method("PUT")  
            @endif
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">    
                <div class="form-group">    
                    <input type="text" name="post_name" class="form-control" placeholder="Post title" value="{{ $post_name }}">
                </div>
            </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">  
                    <div class="form-group">    
                        <textarea name="post_detail" class="form-control" placeholder="Post content">{{ $post_detail }}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">  
                    <div class="form-group">    
                         <button class="btn btn-primary" type="submit">Create post</button>
                    </div>
                </div>
            </div>

        </form>

   
    
@endsection