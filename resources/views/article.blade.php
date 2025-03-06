@extends('layout')

@section('title', 'Article')

@section('content')
<div class="article-page">
    <div class="banner">
        <div class="container">
            <h1>{{ $article->title }}</h1>

            <div class="article-meta">
                <div class="info">
                    <a href="{{ route('article', $article->id) }}" class="author">{{ $article->user->name }}</a>
                    <span class="date">January 20th</span>
                </div>
                <button class="btn btn-sm btn-outline-secondary">
                    <i class="ion-plus-round"></i>
                    &nbsp; Follow {{ $article->user->name }} <span class="counter">(10)</span>
                </button>
                &nbsp;&nbsp;
                <button class="btn btn-sm btn-outline-primary">
                    <i class="ion-heart"></i>
                    &nbsp; Favorite Post <span class="counter">(29)</span>
                </button>
                @if (Auth::check() && Auth::user()->id === $article->user_id)
                <a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm btn-outline-secondary">
                    <i class="ion-edit"></i> Edit Article
                </a>
                <a href="#" onclick="if (confirm('本当に削除しますか？')) { event.preventDefault(); document.getElementById('delete-form-{{ $article->id }}').submit(); }" class="btn btn-sm btn-outline-danger">
                    <i class="ion-trash-a"></i> Delete Article
                </a>
                @endif
                <form id="delete-form-{{ $article->id }}" action="{{ route('article.delete', $article->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>

    <div class="container page">
        <div class="row article-content">
            <div class="col-md-12">
                <p>
                    {{ $article->content }}
                </p>
                <h2 id="introducing-ionic">{{ $article->description }}</h2>
                <ul class="tag-list">
                    @foreach ($article->tags as $tag)
                    <li class="tag-default tag-pill tag-outline">{{ $tag }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <hr />
    </div>
</div>
@endsection