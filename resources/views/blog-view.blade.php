@extends('layouts.main')
@section('title', $blog->title)
@section('content')
<div>
  <figure>
    <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="flex justify-center mx-auto h-3/4 w-full max-w-sm sm:max-w-xl">
  </figure>
  <article class="mx-36 my-10">
    <h2 class="font-bold text-xl sm:text-2xl">{{ $blog->title }}</h2>
    <p>{{ $blog->description }}</p>
    <p><b>Aplicaciones:</b> {{$blog->aplications}}</p>
  </article>
</div>
@endsection