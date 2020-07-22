@extends('layouts.app')

@section('content')
    <h1>Edit your Posts. </h1>
    {!! Form::open(['action' => ['BlogsController@update', $postRowToEdit->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            <!-- Takes in the Name, Value, etc .. -->
            {{Form::text('title', $postRowToEdit->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('descriptionText', $postRowToEdit->body, ['class' => 'form-control', 'placeholder' => 'add details'])}}
        </div>
        <div class="form-group">
            {{Form::file('image_file_post')}}
        </div>
        {{Form::hidden('_method', 'PUT')}} <!-- No route to make a POST request to this so, Spoof a PUT request by using hidden
        | This PUT request of this form will be used by the update method in postscontroller -->
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} <!-- submits to the update function -->
    {!! Form::close() !!}
@endsection 