@extends('layouts.app')
@section('content')
    <h1><a href="{{ route('posts.edit', $post->post_id) }}">{{ $post->post_title }}</a></h1>
    <p>{{ $post->post_body }}</p>
@endsection