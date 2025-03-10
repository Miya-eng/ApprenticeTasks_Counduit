@extends('layout')

@section('title', 'Home')

@section('content')
@if(session('success'))
<div id="flash-message" class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="home-page">
    <div class="banner">
        <div class="container">
            <h1 class="logo-font">conduit</h1>
            <p>A place to share your knowledge.</p>
        </div>
    </div>

    <div class="container page">
        <div class="row">
            <div class="col-md-9">
                <div class="feed-toggle">
                    <ul class="nav nav-pills outline-active">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('your-feed') ? 'active' : '' }}" href="{{ route('your-feed') }}">Your Feed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Global Feed</a>
                        </li>
                    </ul>
                </div>

                @foreach ($articles as $article)
                <div class="article-preview">
                    <div class="article-meta">
                        <div class="info">
                            <a href="{{ route('profile', $article->user_id) }}" class="author">{{ $article->user->name }}</a>
                            <span class="date">January 20th</span>
                        </div>
                        <button class="btn btn-outline-primary btn-sm pull-xs-right">
                            <i class="ion-heart"></i> 32
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
                
                @if (Auth::check())
                <a class="btn btn-outline-primary btn pull-xs-right" href="{{ route('editor') }}">Create</a>
                @endif

                <ul class="pagination">
                    @for ($i = 1; $i <= $articles->lastPage(); $i++)
                    <li class="page-item {{ $articles->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $articles->url($i) }}">{{ $i }}</a>
                    </li>
                    @endfor
                </ul>
            </div>



            <div class="col-md-3">
                <div class="sidebar">
                    <p>Popular Tags</p>

                    <div class="tag-list">
                        <a href="" class="tag-pill tag-default">programming</a>
                        <a href="" class="tag-pill tag-default">javascript</a>
                        <a href="" class="tag-pill tag-default">emberjs</a>
                        <a href="" class="tag-pill tag-default">angularjs</a>
                        <a href="" class="tag-pill tag-default">react</a>
                        <a href="" class="tag-pill tag-default">mean</a>
                        <a href="" class="tag-pill tag-default">node</a>
                        <a href="" class="tag-pill tag-default">rails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection