@extends('layouts.demo.head')

@section('content')

    <div class="container">
      <div class="content">
        <h5> ** This is an example of what your customers will see when they click the BRISEBOX BUTTON that will be displayed on your website. **</h5>
        <div class="company-brand">
          <p id="uppercase-brand"></p>
          COMPANY BRAND
        </div>
        <h4> Shop live with "Morgan" in "Company-Name". </h2>
        <p><img src="navydress.jpeg" class="feature-img" alt="" style="width:50%;"></p> 
        <p>Navy Blue Long Paperbag T. Dress.
        </p>
        <p>$98.99</p>

        <div class="discussion-form">
          <h5>Invite someone to have live discussions on "company-name".</h5>
          <a href="#" class="btn btnInvite">Invite Friend</a>
        </div>

        <div class="form">
          <input type="text" name="name" oninput="this.className = ''" placeholder="Say something" autocomplete="off" disabled />
          <label for="name" class="label-name">
          </label>
        </div>
        <a href="#" onclick="toggle()">Send</a>
    
      </div>
    </div>

@endsection