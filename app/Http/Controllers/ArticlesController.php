<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use Request;


class ArticlesController extends Controller
{
    
    /**
     * View a list of articles
     * @return type
     */
    public function index()
    {
        return view('articles.index', [
            'articles' => Article::all()
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
    
    
    
    public function store()
    {
        $input = Request::all();
        
        Article::create(
            Request::all()
        );
        
        
        return redirect('articles');
    }
    
    
    /**
     * Populate Articles
     */
//    public function populate()
//    {
//        $article = new Article();
//        
//        $article->title = 'article title';
//        $article->body = 'some big ass test text';
//        $article->intro = 'intro text';
//        $article->updated_at = \Carbon\Carbon::now();
//        
//        $article->save();
//    }
}
