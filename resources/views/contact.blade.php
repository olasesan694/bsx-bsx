@extends('layouts.contact.head')

@section('content')
    <div id="topheader"class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container p-2">
                <a class="navbar-brand font-weight-bold" href="{{ url('/') }}"><img src="/images/logo.png" alt="brisebox logo">brisebox</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">--- <br> --- </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard">Docs & API <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jobs">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Sign In -></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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
                        <h2>Fill out the form and we’ll get back to you in a few.</h2>
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

    <section id="footer">
        <div class="container">
            <div class="row offset-1">
                <div class="col-md-4 footer-box">
                    <p> <b>Account</b> </p>
                    <p> <i class="fa fa-dashboard" aria-hidden="true"></i> <a href="dashboard"> Dashboard </a></p>
                    <p> <i class="fa fa-address-book-o" aria-hidden="true"></i> <a href="register">Register </a> </p>
                    <p> <i class="fa fa-sign-in" aria-hidden="true"></i> <a href="login">Sign In </a> </p>
                    <p> <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="contact">Support </a> </p>
                </div>
                <div class="col-md-4 footer-box">
                    <p> <b>Resources</b> </p>
                    <p> <i class="fa fa-file" aria-hidden="true"></i> <a href="docs">Docs & APIs </a> </p>
                    <p> <i class="fa fa-dollar" aria-hidden="true"></i> <a href="pricing">Pricing </a> </p>
                    <p> <i class="fa fa-mortar-board" aria-hidden="true"></i> <a href="jobs">Careers </a> </p>
                    <p> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="contact">Contact </a> </p>
                </div>
                <div class="col-md-4 footer-box">
                    <p><b> <a href="about">Sunnyvale, California 94043 </a> </b> </p>
                    <p> <a href="about">About Brisebox</a> </p>
                    <a href="https://www.facebook.com/brisebox/" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/brisebox/" class="fa fa-twitter"></a>
                    <a href="https://linkedin.com/company/brisebox" class="fa fa-linkedin"></a>
                </div>
            </div>
            <p class="copyright"> &copy; brisebox 2020 </p>
        </div>
    </section>
@endsection