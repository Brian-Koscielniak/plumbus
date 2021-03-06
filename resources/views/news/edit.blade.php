@extends('layouts.global')

@section('content')
  <h3>Edit News</h3>
  <form method='POST' action='/news/{{ $news->id }}'>
    {{ csrf_field() }} <!-- I guess this is checking against a stored 'token' -->
    {{ method_field('PATCH') }} <!-- instruct to laravel this is really a PATCH request -->
    <div class='form-group'>
      <input class='form-control' type='text' placeholder='Author' name='author' value='{{ $news->author }}'/>
      <input class='form-control' type='text' placeholder='Title' name='title' value='{{ $news->title }}'/>
      <textarea class='form-control' placeholder='News text' name='body'>{{ $news->body }}</textarea>
    </div>
    <div class='form-group'>
      <button class='btn btn-primary' type='submit'>Save changes</button>
    </div>
  </form>
@stop
