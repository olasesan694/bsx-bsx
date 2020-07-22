@extends('layouts.app')

@section('content')
    <br>
    <h1>{{$postRow->title}}</h1>
    <img src="/storage/image_file_post/{{$postRow->image_file_post}}" style="width:35%" alt="img">
    <div>
        {{$postRow->body}}
    </div>
    <hr>
    <small>Written on {{$postRow->created_at}} by {{$postRow->user->name}}</small>
    <hr>
    {!! Form::open(['action' => 'BlogsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('', '')}}
            {{Form::textarea('userComment', '', ['class' => 'form-control', 'placeholder' => 'Comment...'])}}
        </div>
        {{Form::submit('Comment', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <br>
    @if(!Auth::guest())
        @if(Auth::user()->id == $postRow->user_id)
            <a href="/find-things/{{$postRow->id}}/edit" class="btn btn-success">Edit</a>
            {!!Form::open(['action' => ['BlogsController@destroy', $postRow->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection