@extends('layouts.blog.create.head')

    @section('content')
    <div id="topheader"class="header">

        @include('nav')

        <section class="header-section">
            <div class="center-div  text-center">
                <h1 class="font-weight-bold">
                    Publish Content You Love.
                </h1>
                <p>Write about shopping deals, ideas, reviews and new home & living resources.</p>
            </div>
        </section>
    </div>

    <div class="container">
        <div class="wrapper">
            {!! Form::open(['action' => 'BlogsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Body')}}
                    {{Form::textarea('descriptionText', '', ['class' => 'form-control', 'placeholder' => 'Write...'])}}
                </div>
                <div class="form-group">
                    {{Form::file('image_file_post')}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection 