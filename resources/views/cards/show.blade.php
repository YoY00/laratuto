@extends('layout')

@section('body')
    <div class="container">
        <div class="content">
            <h1>La carte {{$card->title }}</h1>
            <a href="{{$card->path()}}">lien</a>
            <ul>
                @foreach($card->notes as $note)
                    <li>{{$note->body }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@stop
