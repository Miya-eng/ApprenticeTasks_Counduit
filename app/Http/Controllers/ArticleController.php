<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->paginate(5);
        return view('home', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_article');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tagsArray = array_map('trim', explode(',', $request->tags));

        $article = Article::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'tags' => $tagsArray,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('home')->with('success', '記事を作成しました!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::findOrFail($id);
        return view('article', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        return view('edit_article', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::findOrFail($id);

        $tagsArray = array_map('trim', explode(',', $request->tags));

        $article->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'tags' => $tagsArray,
        ]);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('home');
    }

    public function yourFeed()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $articles = Article::where('user_id', Auth::id())
                            ->latest()
                            ->paginate(5);

        return view('home', compact('articles'));
    }
}