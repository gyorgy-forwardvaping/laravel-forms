@extends('layouts.app')
    <ul>
        @foreach ($posts as $post)
            <div class="image-container">
                @if($post->post_path == '/images/')
                <p>No image</p>
                @else
                <img height="100" src="{{ $post->post_path }}" alt="{{ $post->post_path }}">
                @endif
            </div>
            <li><a href="{{ route('posts.show', $post->post_id) }}">{{ $post->post_title }}</a></li>
        @endforeach
    </ul>
@section('content')
@endsection