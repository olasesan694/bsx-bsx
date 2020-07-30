@extends('layouts.contact.head')

@section('content')
    <div id="topheader"class="header">

        @include('nav')

        <section class="header-section">
            <div class="center-div  text-center">
                <h1 class="font-weight-bold">
                    Contact Us
                </h1>
                <p>Have general questions or feedback? Want to reach our sales team or would just like to talk?</p>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-7">
                    <div class="feature-box">
                        <h2>Available 24/7. Fill out the form, we’ll respond in a few minutes.</h2>
                        <form action="contactInc.php" method="POST">
                            <input type = "text" maxlength = "40" name = "fullName" autocomplete = "off" id = "businessTextboxes" placeholder = "Full name" required>
                            <br>
                            <br>
                            <input type = "email" name = "email" autocomplete = "off" id = "businessTextboxes" placeholder = "Your Email" required>
                            <br>
                            <br>
                            <input type = "text" name = "subject" autocomplete = "off" id = "businessTextboxes" placeholder = "Subject" >
                            <br>
                            <br>
                            <textarea rows="3" cols="25" name = "message" id = "businessTextboxes" placeholder="Message..."></textarea>
                            <br>
                            <br>
                            <button type="submit" name="contact_button" class = "forgotPwdButton">Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer-white')

@endsection