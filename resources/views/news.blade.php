@extends('layouts.global')
@section('content')
  @if (empty($news))
    <h2>No news at this time</h2>
  @else
    <h2>Wowie look it's the news</h2>
    @foreach ($news as $n)
      <p><a href="news/{{ $n->id }}">{{ $n->title }}</a></p>
    @endforeach
    <h3>Make News</h3>
    <form method='POST' action='/news'>
      {{ csrf_field() }} <!-- I guess this is checking against a stored 'token' -->
      <div class='form-group'>
        <input class='form-control' type='text' placeholder='Author' name='author' value="{{ old('author') }}" required/>
        <span class="err error errors">{{ $errors->first('author') }}</span>
        <input class='form-control' type='text' placeholder='Title' name='title' value="{{ old('title') }}" required/>
        <span class="err error errors">{{ $errors->first('title') }}</span>
        <textarea class='form-control' placeholder='News text' name='body' required>{{ old('body') }}</textarea>
        <span class="err error errors">{{ $errors->first('body') }}</span>
      </div>
      <div class='form-group'>
        <button class='btn btn-primary' type='submit'>Publish</button>
      </div>
    </form>
  @endif
@stop
