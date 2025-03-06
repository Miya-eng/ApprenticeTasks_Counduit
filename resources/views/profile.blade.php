@extends('layout')

@section('title', 'Profile')

@section('content')
<div class="profile-page">
    <div class="user-info">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 offset-md-1">
                    <h4>{{ $user->name }}</h4>
                    <p>
                        Cofounder @GoThinkster, lived in Aol's HQ for a few months, kinda looks like Peeta from
                        the Hunger Games
                    </p>
                    <button class="btn btn-sm btn-outline-secondary action-btn">
                        <i class="ion-plus-round"></i>
                        &nbsp; Follow {{ $user->name }}
                    </button>
                    @if (Auth::check() && Auth::user()->id === $user->id)
                    <button class="btn btn-sm btn-outline-secondary action-btn">
                        <i class="ion-gear-a"></i>
                        &nbsp; Edit Profile Settings
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-10 offset-md-1">
                <div class="articles-toggle">
                    <ul class="nav nav-pills outline-active">
                        <li class="nav-item">
                            <a class="nav-link active" href="">My Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Favorited Articles</a>
                        </li>
                    </ul>
                </div>
                @foreach ($articles as $article)
                <div class="article-preview">
                    <div class="article-meta">
                        <div class="info">
                            <a href="" class="author">{{ $article->user->name }}</a>
                            <span class="date">January 20th</span>
                        </div>
                        <button class="btn btn-outline-primary btn-sm pull-xs-right">
                            <i class="ion-heart"></i> 29
                        </button>
                    </div>
                    <a href="{{ route('article', $article->id) }}" class="preview-link">
                        <h1>{{ $article->title }}</h1>
                        <p>{{ $article->description }}</p>
                        <span>Read more...</span>
                        <ul class="tag-list">
                            @foreach ($article->tags as $tag)
                            <li class="tag-default tag-pill tag-outline">{{ $tag }}</li>
                            @endforeach
                        </ul>
                    </a>
                </div>
                @endforeach

                <ul class="pagination">
                    @for ($i = 1; $i <= $articles->lastPage(); $i++)
                    <li class="page-item {{ $articles->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $articles->url($i) }}">{{ $i }}</a>
                    </li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection