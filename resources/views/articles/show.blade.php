@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl">{{ $article->title }}</h1>
    <p class="text-lg text-gray-700 p-2">
        {{ $article->content }}
    </p>
    <a href="{{ route('articles.index') }}">回文章列表</a>
@endsection
