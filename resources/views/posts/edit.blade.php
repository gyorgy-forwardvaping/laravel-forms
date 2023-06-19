@extends('layouts.app')
@section('content')
<h1>edit post</h1>
{!! Form::model($post,['method'=>'PATCH', 'action'=> ['App\Http\Controllers\PostController@update', $post->post_id]]) !!}

    {{-- @csrf --}}
    <div class="form-group">
        {!! Form::label('title', 'Post Title') !!}
        {!! Form::text('post_title', null, ['class'=>'form-controll','id'=>'title']) !!}
        
    </div>
    <div class="form-group">
        {!! Form::label('title2', 'Post Content') !!}
        {!! Form::textarea('post_body', null, ['class' => 'form-controll']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Post', ['class' => 'btn btn-info']) !!}
    </div>
{!! Form::close() !!}

{!! Form::model($post,['method'=>'DELETE', 'action'=> ['App\Http\Controllers\PostController@destroy', $post->post_id]]) !!}
<div class="form-group">
    {!! Form::submit('Delete Post', ['class' => 'btn btn-danger']) !!}
</div>
{!! Form::close() !!}
@endsection