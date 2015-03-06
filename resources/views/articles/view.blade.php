@extends('layout')

@section('content')
<article>
    <header>
        <h1>{{ $article->title }}</h1>
    <header>
    <p>{{ $article->body }}</p>   
</article>
@stop