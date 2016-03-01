@extends('layout')

@section('body')

    <h1>The Welcome page</h1>


    @foreach($people as $person)
        <li>{{ $person }}</li>
    @endforeach
@stop
