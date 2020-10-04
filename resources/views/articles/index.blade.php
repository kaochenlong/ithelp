@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl">文章列表</h1>
    <a href="{{ route('articles.create') }}">新增文章</a>

    @foreach($articles as $article)
        <div class="border-t border-gray-300 my-1 p-2">
            <h2 class="font-bold text-lg">
                <a href="{{ route('articles.show', $article) }}">
                    {{ $article->title }}
                </a>
            </h2>
            <p>
                {{ $article->created_at }} 由 {{ $article->user->name }} 分享
            </p>
            <div class="flex">
                <a class="mr-2" href="{{ route('articles.edit', $article) }}">編輯</a>
                <form action="{{ route('articles.destroy', $article) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="px-2 rounded bg-red-500 text-red-100">刪除</button>
                </form>
            </div>
        </div>
    @endforeach
    {{ $articles->links() }}
@endsection
