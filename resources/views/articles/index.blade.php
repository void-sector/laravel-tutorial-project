@extends('layout')

@section('content')
    <h1>Articles</h1>
    
    
    <p><a href="{{ action('ArticlesController@create') }}" title="">create article</a></p>
    
    
    @if (count($articles))
        <ul>
            @foreach ($articles as $article)
                <li><a href="{{ action('ArticlesController@view', $article->id) }}" title="">{{ $article->title }}</a></li>   
            @endforeach
        </ul>
    @endif
@stop