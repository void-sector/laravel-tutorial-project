<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;

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
    public function view($id)
    {
        return view('articles.view', [
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
    public function store(CreateArticleRequest $request)
    {
        Article::create(
            $request->all()
        );
        
        return redirect('articles');
    }
}
