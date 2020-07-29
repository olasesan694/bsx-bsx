@extends('layouts.pricing.head')

@section('content')
    <div id="topheader"class="header">
        
        @include('nav')

        <section class="header-section">
            <div class="center-div">
                <h1 class="font-weight-bold">
                    Choose a pricing plan. 
                </h1>
                <p> Close online purchases faster with the Brisebox API.</p>
                <div class="header-buttons">
                    <a href="contact">Contact Sales</a>
                    <a href="contact">Get Support</a>
                </div>
            </div>
        </section>
    </div>

    <section id="pricingdiv" class="pricing">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold">
                Try the Brisebox API in action.
            </h1>
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
                            <a href="pricing">Try it Free</a>
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

    <section id="faq" class="faq">
        <div class="container text-center">
            <h2>Some Helpful Questions.</h2>
        
            <button class="accordion">Are there any additional fees (or fine print) that I should know about?</button>
            <div class="panel">
              <p>No, there are absolutely no hidden fees and no additional costs. You'll be charged the amount shown on this page, annually or month-to-month, depending on the plan you choose.</p>
            </div>
            
            <button class="accordion">What information do you store about the users after the Brisebox API integration?</button>
            <div class="panel">
              <p>Brisebox takes data security very seriously. We only collect the user's login information to verified and connect each user.</p>
            </div>
            
            <button class="accordion">Do you issue invoices? Is VAT included?</button>
            <div class="panel">
                <p>Yes, we will only issue invoices -- and VAT is included in the price if it applies to you. You can view your invoice information in your dashboard.</p>
            </div>

            <button class="accordion">WHAT PAYMENT OPTIONS ARE AVAILABLE?</button>
            <div class="panel">
                <p>We accept all major payment methods or credit cards. Your options will be available later in your dashboard. Once you subscribe for the annual or month-to-month plan, your card will be automatically charged at the end of each year or month respectively.</p>
            </div>
        
        <h6>Have more questions? Join the Q&A, <a href="{{ url('/contact') }}" target="_blank" rel="noopener noreferrer">Talk with us</a></h6>
        
        </div>
    </section>

    @include('footer')

@endsection