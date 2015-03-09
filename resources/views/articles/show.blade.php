@extends('layout')

@section('content')
<article>
    <header>
        <h1>{{ $article->title }}</h1>
    <header>
        
        <hr>
        
    <p>{{ $article->body }}</p>   
</article>
@stop