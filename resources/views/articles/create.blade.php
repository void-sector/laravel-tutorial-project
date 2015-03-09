@extends('layout')


@section('content')

    <h1>Write a new Article</h1>
    
    <hr />

    @include('errors.list')  
    

    {!! Form::open(['url' => 'articles']) !!}
        @include('articles.partials.form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

@stop