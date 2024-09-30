@extends('layouts.main')


@section('title', 'Novedades')


@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <h1>Novedades</h1>
        </div>
    </div>
    <div>
    @foreach ($blogs as $blog)
        <ul>
            <li>
                <a href="{{ route('blog.view',['blog_id' => $blog->blog_id])}}">
                    <img src="{{ $blog->image }}" alt="{{$blog->title}}" class="w-1/4 h-1/4">
                    {{$blog->title}}
                </a>
            </li>
        </ul>
        @endforeach
    </div>
</div>

@endsection