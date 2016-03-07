@extends('layout')

@section('body')
    <div class="container">
        <div class="content">
            <h1>All Cards</h1>

            @foreach($cards as $card)
                <div>
                <a href="{{$card->path()}}">{{$card->title }}</a>
                </div>
            @endforeach

        </div>
    </div>
@stop
