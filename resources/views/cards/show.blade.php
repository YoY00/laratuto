@extends('layout')

@section('body')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>La carte {{$card->title }}</h1>

            <ul class="list-group">
                @foreach($card->notes as $note)

                    <li class="list-group-item">
                        <a href="{{$note->editPath()}}">{{$note->body}}</a>
                        <span class="pull-right">{{$note->user->name}}</span>
                    </li>
                @endforeach
            </ul>


            <h3>Add a note</h3>

            <form action="{{url('/cards/'.$card->id.'/notes')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea class="form-control" name="body" id=""></textarea>
                </div>
                <div class="form-group">
                    <button type="text" class="btn btn-primary">Valider</button>
                </div>
            </form>


            <h3>Add a note 2 </h3>

            <form action="<?php echo url('/notes/post'); ?>" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea class="form-control" name="body" id="">{{old('body')}}</textarea>
                    <input type="hidden" name="card_id" value="{{$card->id}}">
                </div>
                <div class="form-group">
                    <button type="text" class="btn btn-primary">Valider</button>
                </div>
            </form>



            @if(count($errors))
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            @endif


        </div>
    </div>



@stop
