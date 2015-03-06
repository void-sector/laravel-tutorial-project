@extends('layout')


@section('content')
    <h2>people i like</h2>

    @if (count($people))
        <ul>
            @foreach ($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif
@stop


@section('footer')
    footer here
@stop