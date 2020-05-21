@extends('layouts.main.head')

@section('content')
    <div id="topheader"class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container text-uppercase p-2">
                <a class="navbar-brand font-weight-bold text-white" href="{{ url('/') }}"><img src="/images/logo.png" alt="brisebox logo">{{ config('app.name', 'brisebox') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">--</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-uppercase">
                        @guest
                            <li class="nav-item active">
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
                                <a class="nav-link" href="{{ url('/login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ url('/home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            {{-- <li class="nav-item ">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li> --}}
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <section class="header-section">
            <div class="center-div">
                <h1 class="font-weight-bold">
                    Use Brisebox for <span class="txt-type" data-wait="1500" data-words='["your e-commerce store.", "your customers."]'></span> 
                </h1>
                <p> Get help with closing online purchases faster.</p>
                <div class="header-buttons">
                    <a href="register">Try it</a>
                    <a href="contact">Help with Integration</a>
                </div>
                <script src="/js/header.js"></script>
            </div>
        </section>
    </div>

    

    <section id="services">
        <div class="container text-center">
            <h2 class="title">  We help your customers initiate a purchase faster <br> through the Brisebox API.</h2>
            <div class="row text-left">
                <div class="col-md-4 services">
                    <img src="images/doc.png" alt="picture" class="service-img">
                    <h4>Customize</h4>
                    <p>Easily customize the Brisebox UI layout to match your brand. You can customize the display of the UI to fit your website. </p>
                </div>
                <div class="col-md-4 services">
                    <img src="images/gear.png" alt="picture" class="service-img">
                    <h4>Integrate Quickly</h4>
                    <p>If your customers are leaving without making purchases, take advantage of the pre-made Brisebox UI to get help with initiating purchases.</p>
                </div>
                <div class="col-md-4 services">
                    <img src="images/cart.png" alt="picture" class="service-img">
                    <h4>Customers Initiate Purchases Faster</h4>
                    <p>The Brisebox API functionality helps engage your customers until they are ready to make their purchase.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <h2 class="text-center">What we do for your online store. </h2>
        <div class="container text-center">
            <div class="row text-left">
                <div class="col-md-6 left-about">
                    <h3>Exposure</h3>
                    <ul>
                        <li>1. Help invite new guests</li>
                        <li>2. Get you more customer interaction on your platform</li>
                        <li>3. Provide you instant feedback</li>
                        <li>4. Get you live insights </li>
                    </ul>
                </div>
                <div class="col-md-6 right-about">
                    <h3>Retention & Closure </h3>
                    <ul>
                        <li>1. Create you longer customer retention</li>
                        <li>2. Increase your customer engagement</li>
                        <li>3. Provide your customers instant shopping assistance</li>
                        <li>4. Help your customers initiate a purchase faster</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="sample">
        {{-- <div id="demo"> --}}
            <h3 class="text-center">Get started to try the Brisebox Sample Button</h3>
        {{-- </div> --}}
        {{-- <br>
        <br> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/navydress.jpeg" alt="First slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="newarrival text-center">NEW</p>
                    <h4> Women's Paperbag Detail Dress Piece</h4>
                    <p class="price"> USD $65.00</p>
                    <br>
                    <br>
                    <br>
                    <!-- BRISEBOX BUTTON CONNECTOR  -->
                    <button class="btn-primary bb-share-button" onclick="window.location.href='{{ url('/register') }}'" style="vertical-align:middle">
                        use Brisebox <div style="font-style: italic; display:inline;"> Sample </div>
                    </button>
                </div>
                <img src="/images/stores.png" alt="stores" style="height:100px;">
                {{-- <img src="/images/stores2.png" alt="stores" style="height:100px;"> --}}
            </div>
            
        </div>
    </section> 

    <section id="pricingdiv" class="pricing">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold text-white">
                What We Offer
            </h1>
            <p class="text-center">Choose a plan to see the Brisebox API in action.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">BASIC</div>
                        <div class="card-body">
                            <li>$<span class="money">0</span></li>
                            <li>Provision of New users</li>
                            <li>Customer Retention</li>
                            <li>Faster initiation of purchases.</li>
                            <li>Support</li>
                        </div>
                        <div class="card-footer">
                            <a href="pricing">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 card-second">
                    <div class="card text-center">
                        <div class="card-header">STANDARD</div>
                        <div class="card-body">
                            <li>$<span class="money">30</span>/website</li>
                            <li>All of free plan</li>
                            <li>In-app assistance</li>
                            <li>Instant feedback</li>
                            <li>Customer Support 24/7</li>
                        </div>
                        <div class="card-footer">
                            <a href="pricing">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">CUSTOM</div>
                        <div class="card-body">
                            <li>$<span class="money">70</span>+</li>
                            <li>Want More?</li>
                            <li>Tell us your specific requirements </li>
                            <li>for tools, features, etc?</li>
                            <li>Talk to us</li>
                        </div>
                        <div class="card-footer">
                            <a href="contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
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
                    <p> <i class="fa fa-map-marker" aria-hidden="true"></i>Docs & APIs</p>
                    <p> <i class="fa fa-phone" aria-hidden="true"></i>Pricing</p>
                    <p> <i class="fa fa-envelope-o" aria-hidden="true"></i>Careers</p>
                    <p> <i class="fa fa-envelope-o" aria-hidden="true"></i>Contact</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p> <b>NYC, United States 10013</b> </p>
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