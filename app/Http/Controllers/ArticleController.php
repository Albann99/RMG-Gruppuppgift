<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
<<<<<<< HEAD
=======
use App\Category;
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function index()
    {
=======

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);


    }

    public function index()
    {
    
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
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
<<<<<<< HEAD
     return view('articles/create');   
=======
        
     return view('articles/create');
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
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
<<<<<<< HEAD
=======
        $article->rent_price = $request->rent_price;
        $article->category_id = $request->category_id;
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
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
<<<<<<< HEAD
=======

>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
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
<<<<<<< HEAD
        //
=======

        
        return view('articles/edit', ['article' => $article]);
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
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
<<<<<<< HEAD
        //
=======
        $article->name = $request->name;
        $article->url = $request->url;
        $article->rent_price = $request->rent_price;
        $article->save();

        return redirect('/articles/' . $article->id);
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
<<<<<<< HEAD
        //
=======
        $article->delete();

       return redirect('/articles');

>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
    }
}
