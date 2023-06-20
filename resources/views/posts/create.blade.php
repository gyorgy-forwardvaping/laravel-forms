@extends('layouts.app')
@section('content')

{!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\PostController@store', 'files' => true]) !!}

    @csrf

    <div class="form-group">
        {!! Form::label('title', 'Post Title') !!}
        {!! Form::text('post_title', null, ['class'=>'form-controll']) !!}
        
    </div>

    <div class="form-group">
        {!! Form::file('file', ['class'=>'form-controll']) !!}
        
    </div>

    <div class="form-group">
        {!! Form::label('title2', 'Post Content') !!}
        {!! Form::textarea('post_body', null, ['class' => 'form-controll']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
@if (count($errors) > 0) 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $key => $error)
                <li>{{ $key }} : {{ $error }}</li>
            @endforeach
        </ul>
    </div>

    
@endif
@endsection