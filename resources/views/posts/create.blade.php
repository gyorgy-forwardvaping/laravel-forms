@extends('layouts.app')
@section('content')
<form method="post" action="/posts">
    @csrf
    
    <input type="text" name="post_title" id="post_title" placeholder="Enter Title">

    <input type="submit" value="submit">
</form>
@endsection