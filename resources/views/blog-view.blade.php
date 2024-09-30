@extends('layouts.main')
@section('title', $blog->name)
@section('content')
<div>
  <figure>
    <img src="{{ $blog->image }}" alt="{{ $blog->title }}">
  </figure>
  <article>
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->description }}</p>
    <p>{{$blog->aplications}}</p>
  </article>
</div>
@endsection