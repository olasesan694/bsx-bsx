@extends('layouts.blog.show.head')

@section('content')

    <div id="topheader"class="header">

        @include('nav')

        <section class="header-section">
            <div class="center-div  text-center">
                <h1 class="font-weight-bold">
                    Today on Shopping Deals & Ideas
                </h1>
                <p>Shopping deals, ideas, reviews and new home & living resources.</p>
            </div>
        </section>
    </div>
    
    <div class="container">
        <div class="wrapper">
            <h1>{{$postRow->title}}</h1>
            {{-- <img src="/storage/image_file_post/{{$postRow->image_file_post}}" style="width:35%" alt="img"> --}}
            <img class="card-img-top" src="/images/homeplant.jpg" alt="Card image cap">
            <div>
                {!! $postRow->body !!}
            </div>
            <hr> 
            {{-- <small>On {{$postRow->created_at}} {{$postRow->user->name}}</small> --}}
            <small>On {{ $postRow->created_at->format('Y-m-d') }} <a href="https://retailers.brisebox.com" target="_blank">Brisebox Team</a></small>
            <hr>
            {{-- {!! Form::open(['action' => 'BlogsController@store', 'method' => 'POST']) !!}
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
            @endif --}}
        </div>
    </div>

    @include('footer-white')

@endsection