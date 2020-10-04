@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl">文章列表</h1>
    <a href="{{ route('articles.create') }}">新增文章</a>

    @foreach($articles as $article)
        <div class="border-t border-gray-300 my-1 p-2">
            <h2 class="font-bold text-lg">{{ $article->title }}</h2>
            <p>
                {{ $article->created_at }} 由 {{ $article->user->name }} 分享
            </p>
        </div>
    @endforeach
@endsection
