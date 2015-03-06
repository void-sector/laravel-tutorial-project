@extends('layout')

@section('content')
    <h1>Articles</h1>
    
    @if (count($articles))
    <ul>
        @foreach ($articles as $article)
        <li>{{ $article->title }}</li>   
        @endforeach
    </ul>
    @endif
@stop