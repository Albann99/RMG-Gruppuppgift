<?php

namespace App\Http\Controllers;

use Auth;
use App\Category;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);


    }

    public function index()
    {
        $articles = Article::all();
        
        return view('articles/index', ['articles' => $articles]);
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();

     return view('articles/create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->user_id = Auth::user()->id;
        $article->name = $request->name;
        $article->url = $request->url;
        $article->rent_price = $request->rent_price;
        $article->slug = str_slug($request->slug);
        $article->category_id = $request->category_id;
        $article->save();

        return redirect('/articles');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {

        return view('articles/show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        if ($article->user_id == Auth::user()->id);
            else 
            abort(403);
        
        
        return view('articles/edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->name = $request->name;
        $article->url = $request->url;
        $article->rent_price = $request->rent_price;
        $article->slug = str_slug($request->name);
        $article->save();

        return redirect('/articles/' . $article->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

       return redirect('/articles');

    }
}
