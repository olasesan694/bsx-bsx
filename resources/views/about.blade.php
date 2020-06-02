@extends('layouts.about.head')

@section('content')
    <div id="topheader"class="header">

        @include('nav')

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
                            <a href="#details" class="fa fa-facebook"></a>
                            <a href="#details" class="fa fa-twitter"></a>
                            <a href="#details" class="fa fa-linkedin"></a>
                            <p> <b>Christy Adams</b> </p>
                            <a href="#details" class="fa fa-facebook"></a>
                            <a href="#details" class="fa fa-twitter"></a>
                            <a href="#details" class="fa fa-linkedin"></a>
                            <p> <b>Helen Stevenson</b> </p>
                            <a href="#details" class="fa fa-facebook"></a>
                            <a href="#details" class="fa fa-twitter"></a>
                            <a href="#details" class="fa fa-linkedin"></a>
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
            <p>Of the 1.3M+ e-commerce businesses across the U.S. looking to grow online, Brisebox serves futuristic online companies and brings more shoppers and purchases to their platform using the <a href="pricing"> afforable Brisebox Retail Software </a>. We run on the fundamental belief that having access to engaging services creates valuable opportunity. Brisebox is committed to democratizing enagement services and empowering people and businesses to <a href="jobs"> join and thrive in the global economy </a>. 
                <br> <br> Our open <a href="docs"> digital Brisebox API </a> gives Brisebox's active account holders the confidence to connect and interact in new and powerful ways online. Through a combination of technological innovation and strategic partnerships, Brisebox creates better ways to manage engagement, and offers choice and flexibility while shopping on ecommerce stores. Available in a few markets, Brisebox enables businesses to provide better online shopping for customers. For more information on Brisebox, visit <a href="https://retailers.brisebox.com/contact">https://retailers.brisebox.com/contact</a>.
        </div>
    </section>

    @include('footer')

@endsection