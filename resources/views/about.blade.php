@extends('layouts.about.head')

@section('content')
    <div id="topheader"class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container p-2">
                <a class="navbar-brand font-weight-bold" href="{{ url('/') }}"><img src="/images/logo.png" alt="brisebox logo">brisebox</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> --- <br> --- </span>
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
            <div class="center-div">
                <h1 class="font-weight-bold">
                    More Shoppers. More Purchases. 
                </h1>
                <p> Brisebox serves futuristic online companies using our API.</p>
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
                            <li>Sunnyvale, California 94043 </li>
                            <h5>Others</h5>
                            <li>Austin, Texas</li>
                            <li>Fishers, IN</li>
                            <li>Denver, CO</li>
                            <li>New York City, NY</li>
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
        <div class="container text-left">
            <h3>Core Values</h3>
            <p>Of the 1.3M+ e-commerce businesses across the U.S. looking to grow online, Brisebox serves futuristic online companies and brings more shoppers and purchases to their platform using the afforable Brisebox Retail Software. We run on the fundamental belief that having access to engaging services creates valuable opportunity. Brisebox is committed to democratizing enagement services and empowering people and businesses to join and thrive in the global economy. 
                <br> <br> Our open digital Brisebox API gives Brisebox's active account holders the confidence to connect and interact in new and powerful ways online. Through a combination of technological innovation and strategic partnerships, Brisebox creates better ways to manage engagement, and offers choice and flexibility while shopping on ecommerce stores. Available in a few markets, Brisebox enables businesses to provide better online shopping for customers. For more information on Brisebox, visit <a href="https://retailers.brisebox.com/contact">https://retailers.brisebox.com/contact</a>.
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="row offset-1">
                <div class="col-md-4 footer-box">
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
                    <p> <b>Sunnyvale, California 94043</b> </p>
                    <p> <a href="about">About Brisebox</a> </p>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
            </div>
            <p class="copyright"> &copy; brisebox 2020 </p>
        </div>
    </section>
@endsection