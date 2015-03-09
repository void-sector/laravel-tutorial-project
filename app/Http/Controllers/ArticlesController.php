<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ArticlesController extends Controller
{
    
    /**
     * View a list of articles
     * @return type
     */
    public function index()
    {
        return view('articles.index', [
            'articles' => Article::latest('id')->get()
        ]);
    }

    
    /**
     * View a list of articles
     * @return type
     */
    public function show($id)
    {
        return view('articles.show', [
            'article' => Article::findOrFail($id)
        ]);
    }

    
    /**
     * View a list of articles
     * @return type
     */
    public function create()
    {
        return view('articles.create');
    }
    
    
    /**
     * Store the newly created article
     * 
     * @param CreateArticleRequest $request
     * @return void
     */
    public function store(ArticleRequest $request)
    {
        Article::create(
            $request->all()
        );
        
        return redirect('articles');
    }
    
    
    public function edit($id)
    {
        return view('articles.edit', [
            'article' => Article::findOrFail($id)
        ]);
    }
    
    
    /**
     * Update article
     * 
     * @param type $id
     * @param \App\Http\Controllers\Request $request
     * @return type
     */
    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        
        return redirect('articles');
    }
}
