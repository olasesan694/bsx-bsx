@extends('layouts.main.head')

@section('content')
    <div id="topheader"class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container p-2">
                <a class="navbar-brand font-weight-bold" href="{{ url('/') }}"><img src="/images/logo.png" alt="brisebox logo">{{ config('app.name', 'brisebox') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">--- <br> ---</span>
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
                    Use Brisebox for <span class="txt-type" data-wait="1500" data-words='["your e-commerce website.", "your shoppers."]'></span> 
                </h1>
                <p> Get instantly more shoppers, and more purchases.</p>
                <div class="header-buttons">
                    <a href="register">Try it</a>
                    <a href="contact">Help with Integration</a>
                </div>
                <script src="/js/header.js"></script>
            </div>
        </section>
    </div>


    <section id="about" class="about">
        <div class="container">
            <div class="row">
              <div class="col-md-6 left-about">
                <img src="/images/officepeople.jpg" alt="">
              </div>
              <div class="col-md-6 right-about">
                <h3>EXPOSURE</h3>
                <ul>
                    <li>&#8594; Provide engagement for new shoppers and guests</li>
                    <li>&#8594; Instantly boost your customer interaction</li>
                    {{-- <li>3. Provide you instant feedback</li>
                    <li>4. Get you live insights </li> --}}
                </ul>
              </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="row">
              <div class="col-md-6 right-about">
                <h3>CLOSURE & RETENTION</h3>
                <ul>
                    <li>&#8594; Get longer customer retention</li>
                    <li>&#8594; Achieve more purchases faster</li>
                    {{-- <li>3. Provide you instant feedback</li>
                    <li>4. Get you live insights </li> --}}
                </ul>
              </div>
              <div class="col-md-6 ">
                <img src="/images/girl-schedule.png" alt="creative team">
              </div>
            </div>
        </div>
    </section>

    

    <section id="sample" class="sample">
        {{-- <div id="demo"> --}}
            <h3 class="text-center">Try the Brisebox Sample Button.</h3>
        {{-- </div> --}}
        {{-- <br>
        <br> --}}
        <div class="container">
            <div class="row samplediv">
                <div class="col-md-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/navydress.jpeg" alt="navy dress">
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
                <div class="stores">
                    <img src="/images/stores.png" alt="stores">
                </div>
                {{-- <img src="/images/stores2.png" alt="stores" style="height:100px;"> --}}
            </div>
            
        </div>
    </section> 

    <section id="pricingdiv" class="pricing">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold">
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
                            <li>&#10003; Basic integration</li>
                            <li>&#10003; Upgrade Option</li>
                            <li>&#10003; Customization</li>
                            <li>&#10003; Quick Support</li>
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
                            <li>All of Basic including</li>
                            <li>&#10003; In-app assistance</li>
                            <li>&#10003; Instant feedback</li>
                            <li>&#10003; Customer Support 24/7</li>
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