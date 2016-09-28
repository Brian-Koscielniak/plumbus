@extends('layouts.global')
@section('content')
  <h3>{{ $news->title }}</h3>
  <div>{{ $news->body }}</div>
  @unless(empty($news->images[0]))
    <img src="/images/{{ $news->images[0]->file_name }}" alt="plumbs" />
  @endunless
  <p><span>{{ $news->author }}</span> | <span>{{ $news->created_at }}</span> | <span>{{ $news->updated_at }}</span></p>
  <a href='/news/{{ $news->id }}/edit'><button class='btn'>edit</button></a>
  <a href='/news/{{ $news->id }}/delete'><button class='btn'>delete</button></a>
@stop
