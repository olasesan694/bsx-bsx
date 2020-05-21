@extends('layouts.about.head')

@section('content')
    <div id="topheader"class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container text-uppercase p-2">
                <a class="navbar-brand font-weight-bold" href="{{ url('/') }}"><img src="/images/logo.png" alt="brisebox logo">Brisebox</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">--</span>
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
                            <a class="nav-link" href="#">Sign In -></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="header-section">
            <div class="center-div">
                <h1 class="font-weight-bold">
                    Brisebox is pioneering engagement on e-commerce platforms. 
                </h1>
                <p> We help online business close purchases faster using our Brisebox API.</p>
                <div class="header-buttons">
                    <a href="contact">Get in Touch</a>
                </div>
            </div>
        </section>
    </div>

    <section id="detailsdiv" class="details">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold">
                Who we are.
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">People</div>
                        <div class="card-body">
                            <p> <b>Marc Waston</b> </p>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                            <p> <b>Christy Adams</b> </p>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                            <p> <b>Helen Stevenson</b> </p>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 card-second">
                    <div class="card text-center">
                        <div class="card-header">Offices</div>
                        <div class="card-body">
                            <h5>Corporate offices</h5>
                            <li>San Jose, California 95131 </li>
                            <h5>Others</h5>
                            <li>Austin, Texas</li>
                            <li>Seattle, WA</li>
                            <li>Fishers, IN</li>
                            <li>Denver, Co.</li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">Sector Keywords</div>
                        <div class="card-body">
                            <li>E-commerce</li>
                            <li>Retail</li>
                            <li>B2B</li>
                            <li>Online Stores</li>
                            <li>B2C</li>
                            <li>Online Shopping</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="values" class="values">
        <div class="container text-center">
            <h3>Core Values</h3>
            <p>Fueled by a fundamental belief that having access to enagement services creates opportunity, Brisebox (NASDAQ: BSX) is committed to democratizing enagement services and empowering people and businesses to join and thrive in the global economy. Our open digital Brisebox Button gives Brisebox’s 277 million active account holders the confidence to connect and transact in new and powerful ways, whether they are online, on a mobile device, in an app, or in person. Through a combination of technological innovation and strategic partnerships, Brisebox creates better ways to manage engagement, and offers choice and flexibility while online shopping on ecommerce stores. Available in a few markets, Brisebox enables consumers and merchants to experience better online shopping. For more information on Brisebox, visit <a href="https://www.brisebox.com/about">https://www.brisebox.com/about</a>. For Brisebox enagement information, visit <a href="https://investor.brisebox.com">https://investor.brisebox.com</a>.</p>
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="row offset-1">
                <div class="col-md-4 footer-box">
                    <!-- <p>A fun way to text, video communicate, and plan things all in the workplace. Fun way to text, video communicate, and plan things all in the workplace.</p>
                    <p class="user-details"><b>Angelina</b> <br> Executive Director, ESsense</p> -->
                    <p> <b>Account</b> </p>
                    <p> <i class="fa fa-map-marker" aria-hidden="true"></i>Dashboard</p>
                    <p> <i class="fa fa-phone" aria-hidden="true"></i>Register </p>
                    <p> <i class="fa fa-envelope-o" aria-hidden="true"></i>Sign In</p>
                    <p> <i class="fa fa-envelope-o" aria-hidden="true"></i>Support</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p> <b>Resources</b> </p>
                    <p> <i class="fa fa-map-marker" aria-hidden="true"></i>Documentation</p>
                    <p> <i class="fa fa-phone" aria-hidden="true"></i>API</p>
                    <p> <i class="fa fa-envelope-o" aria-hidden="true"></i>Sales</p>
                    <p> <i class="fa fa-envelope-o" aria-hidden="true"></i>Contact</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p> <b>NYC, United States 10013</b> </p>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
            </div>
            <p class="copyright"> &copy; brisebox 2020 </p>
        </div>
    </section>
@endsection