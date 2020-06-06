@extends('layouts.main.head')

<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5ed7e2024a7c62581799dadd/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>

@section('content')
    <div id="topheader"class="header">
        
        @include('nav')

        <section class="header-section">
            <div class="center-div">
                <h1 class="font-weight-bold">
                    Use Brisebox for <span class="txt-type" data-wait="1500" data-words='["your e-commerce website.", "your shoppers."]'></span> 
                </h1>
                <p> Instantly improve your customer's shopping experience. </p>
                <div class="header-buttons">
                    <a href="register">TRY IT</a>
                    <a href="contact">HELP WITH INTEGRATION</a>
                </div>
                <script src="/js/header.js"></script>
            </div>
        </section>
    </div>


    <section id="about" class="about">
        <div class="container">
            <div class="row">
              <div class="col-md-6">
                <img src="/images/guests.png" alt="">
              </div>
              <div class="col-md-6 left-about">
                <h3>Get Assistance Engaging Visitors</h3>
                <ul>
                    <li>&#8594; Get new visitors, and engage new shoppers and guests. </li>
                    <li>&#8594; Instantly boost your customer interaction.</li>
                </ul>
              </div>
            </div>
        </div>
    </section>

    <section id = "info" class="info">
        <h1 class="text-center font-weight-bold">
            Shoppers are less likely to make purchases with <br>  poor online experiences.
        </h1>
        <div class="row d-flex justify-content-center" >
            <div class="col-md-6 infobody">
                <img src="images/doc.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">3-Step Integration</h5>
                    <p class="card-text">Take advantage of our pre-made Brisebox UI to close deals faster, if your customers need a better shopping experience, and are leaving without making purchases.</p>
                </div>
            </div>
            <div class="col-md-6 infobody-second">
                <img src="images/cart.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Higher Conversion Rates</h5>
                    <p class="card-text">Rentention and conversion rates are important for creating better customer experiences. Use the Brisebox API functionality to engage your customers until they are ready to make their purchase. Increase conversion rates, and sell faster with Brisebox. </p>
                </div>
            </div>
        </div>
    </section>

    <section id="about2" class="about2">
        <div class="container">
            <div class="row">
              <div class="col-md-6 right-about">
                <h3>Increase Closure & Retention</h3>
                <ul>
                    <li>&#8594; Get longer customer retention and engagment.</li>
                    <li>&#8594; Achieve more purchase deals, faster.</li>
                </ul>
              </div>
              <div class="col-md-6 ">
                <img src="/images/money.png" alt="creative team">
              </div>
            </div>
        </div>
    </section>

    <section id="sample" class="sample">
        <h3 class="text-center">Try the sample button.</h3>
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
                    <h4> Women's Long-Sleeve Detail Dress Piece</h4>
                    <p class="price"> USD $79.99</p>
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
                            <li>&#10003; Fast, Secure Integration</li>
                            <li>&#10003; Upgrade Option</li>
                            <li>&#10003; Customization</li>
                            <li>&#10003; Quick Support</li>
                        </div>
                        <div class="card-footer">
                            <a href="dashboard">Start</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 card-second">
                    <div class="card text-center">
                        <div class="card-header">STANDARD</div>
                        <div class="card-body">
                            <li>$<span class="money">30</span>/month</li>
                            <li>All of Basic including</li>
                            <li>&#10003; In-app assistance</li>
                            <li>&#10003; Instant feedback</li>
                            <li>&#10003; Customer Support 24/7</li>
                        </div>
                        <div class="card-footer">
                            <a href="pricing">View</a>
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
                            <a href="contact">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

@endsection