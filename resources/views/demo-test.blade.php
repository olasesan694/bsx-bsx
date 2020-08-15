@extends('layouts.demo.head')

@section('content')

    <div class="container">
      <div class="content">
        <h6> ** Viewing the same product **</h6>
        <div class="company-brand">
          <p id="uppercase-brand"></p>
          Text
        </div>
        <p><img src="/images/test-store/girldress.jpg" class="feature-img" alt="navy" style="width:50%;"></p> 
        <p>Sleeveless Mock Neck Dress
        </p>
        <p>$98.99</p>

        {{-- <div class="discussion-form" > --}}
        <div class="discussion-form" style="border:2px solid whitesmoke; margin: 5px; padding:20px; height:120px;">
          <a href="#" class="btn btnInvite">Chat Area -- Sign In</a>
        </div>

        {{-- <div class="form">
          <input type="text" name="name" oninput="this.className = ''" placeholder="Say something" autocomplete="off" disabled />
          <label for="name" class="label-name">
          </label>
        </div>
        <a href="#" onclick="toggle()">Send</a> --}}

        @include('poweredby')
        
      </div>
    </div>
    
@endsection