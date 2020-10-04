@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl">文章列表</h1>
    <a href="{{ route('articles.create') }}">新增文章</a>
@endsection
