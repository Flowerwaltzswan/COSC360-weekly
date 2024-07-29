@extends('layouts.app') 

@section('content')
    <h1> Blog Posts </h1>
    <!-- Below uses blade syntax but not supported -->
    <a href="{{ route('posts.create')}}" class="btn btn-primary">Create Post</a>
    <u1>
        <!-- extend master layout, defined section displaying list of blog posts -->
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title}}
            </li>
        @endforeach
    </u1>
@endsection