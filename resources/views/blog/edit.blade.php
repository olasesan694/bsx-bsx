@extends('layouts.blog.edit.head')

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
                <h1>Edit your Post. </h1>
                {!! Form::open(['action' => ['BlogsController@update', $postRowToEdit->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        <!-- Takes in the Name, Value, etc .. -->
                        {{Form::text('title', $postRowToEdit->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('description', 'Body:')}}
                        {{Form::textarea('descriptionText', $postRowToEdit->body, ['class' => 'form-control', 'rows' => '30', 'placeholder' => 'add details'])}}
                    </div>
                    {{-- <div class="form-group">
                        {{Form::file('image_file_post')}}
                    </div> --}}
                    {{Form::hidden('_method', 'PUT')}} <!-- No route to make a POST request to this so, Spoof a PUT request by using hidden
                    | This PUT request of this form will be used by the update method in postscontroller -->
                    {{Form::submit('Publish', ['class'=>'btn btn-primary'])}} <!-- submits to the update function -->
                {!! Form::close() !!}
            </div>
        </div>
        
        @include('footer-white')
        
@endsection 