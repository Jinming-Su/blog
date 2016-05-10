<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function index() {

        $articles = Article::latest()->get();
        return view('articles.index',compact('articles'));
    }

    public function show($id) {

        $article = Article::findOrFail($id);
        return view('articles.show',compact('article'));
    }

    public function create() {

        return view('articles.create');
    }

    public function edit($id) {

        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Requests\createArticleRequest $request, $id) {

        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect('/article');
    }

    public function store(Requests\createArticleRequest $request) {
        //1.receive
        //2.save
        //3.redirect
        $input = $request->all();
        Article::create(array_merge(['user_id'=>Auth::user()->id],$input));

        return redirect('/article');
    }
}
