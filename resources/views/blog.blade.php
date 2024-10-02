@extends('layouts.main')


@section('title', 'Novedades')


@section('content')


<section class="min-h-dvh items-center">
  <div class="flex w-full items-center justify-center">
    <h2 class="text-4xl font-bold text-center">Novedades</h2>
  </div>
  <div class="flex w-full flex-col items-center justify-center">
    <ul class="grid grid-cols-2 gap-8 w-4/5 mx-auto mt-4">
    @foreach ($blogs as $blog)
      <li class="flex flex-col items-center justify-center relative border-2 rounded-md p-4">
      <a href="{{ route('blog.view',['blog_id' => $blog->blog_id])}}" class="flex flex-col items-center justify-center h-full">
                    <img src="{{ $blog->image }}" alt="{{$blog->title}}" class="h-full w-full aspect-square object-contain">
          <span class="text-md text-gray-700 font-bold">{{$blog->title}}</span>
        </a>
      </li>
      @endforeach
    </ul>
  </div>
</section>

@endsection
