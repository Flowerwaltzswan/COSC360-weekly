@extends('layouts.app') 

@section('content')
    <h1> Blog Post Details </h1>
    <!-- Below uses blade syntax but not supported -->
     <a href="{{ url()-> previous()}}">Back</a>
    <u1>
        <li>ID: {{ $post->id}}</li>
        <li>Title: {{ $post->title}}</li>
        <li>Content: {{ $post->content}}</li>
    </u1>
@endsection