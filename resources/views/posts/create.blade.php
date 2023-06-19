@extends('layouts.app')
@section('content')

{!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\PostController@store']) !!}

    @csrf
    <div class="form-group">
        {!! Form::label('title', 'Post Title') !!}
        {!! Form::text('post_title', null, ['class'=>'form-controll']) !!}
        @error('post_title')
        <div class="invalid-feedback">
            test
          </div>
          @enderror
    </div>
    <div class="form-group">
        {!! Form::label('title2', 'Post Content') !!}
        {!! Form::textarea('post_body', null, ['class' => 'form-controll']) !!}
        @if($errors->post_body)
        <div class="invalid-feedback">
            {{ $errors->post_body }}
          </div>
          @endif
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