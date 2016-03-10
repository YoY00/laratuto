@extends('layout')

@section('body')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Edit the note</h1>
            <form action="{{$note->updatePath()}}" method="post">
                {{method_field('PATCH')}}
                {{csrf_field()}}

                <div class="form-group">
                    <textarea class="form-control" name="body" id="">{{$note->body}}</textarea>

                </div>
                <div class="form-group">
                    <button type="text" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>



@stop
