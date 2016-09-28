@extends('layouts.global')
@section('content')
  @if (empty($news))
    <h2>No news at this time</h2>
  @else
    <h2>Wowie look it's the news</h2>
    @foreach ($news as $n)
      <p>{{ $n }}</p>
    @endforeach
  @endif
@stop
