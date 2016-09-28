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
      <input type="hidden" name="_token" value="{{ csrf_token() }}"> <!-- still don't really know what this is for, but it fixes 'TokenMismatchException' -->
      <div class='form-group'>
        <input class='form-control' type='text' placeholder='Author' name='author'/>
        <input class='form-control' type='text' placeholder='Title' name='title'/>
        <textarea class='form-control' placeholder='News text' name='body'></textarea>
      </div>
      <div class='form-group'>
        <button class='btn btn-primary' type='submit'>Publish</button>
      </div>
    </form>
  @endif
@stop
