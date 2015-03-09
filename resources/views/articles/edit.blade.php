@extends('layout')


@section('content')

    <h1>Edit: {{ $article->title }}</h1>
    
    <hr />

    
    @include('errors.list')  
    

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        @include('articles.partials.form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}

@stop