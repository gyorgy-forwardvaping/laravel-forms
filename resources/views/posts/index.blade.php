@extends('layouts.app')
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', $post->post_id) }}">{{ $post->post_title }}</a></li>
        @endforeach
    </ul>
@section('content')
@endsection