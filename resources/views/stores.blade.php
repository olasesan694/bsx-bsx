@extends('layouts.stores.head')

@section('content')
    <div id="topheader"class="header">

        @include('nav')

        <section class="header-section">
            <div class="center-div  text-center">
                <h1 class="font-weight-bold">
                    Shop from Stores 
                </h1>
                <p>New home decor releases by our partners and AMZN Prime small business stores.</p>
            </div>
        </section>
    </div>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8 p-5 text-center store">

            <a href="https://amzn.to/3ggUGUK">Browse store -> </a>

        </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <section id="footer">
    <div class="container">
        <div class="row offset-1">
            <div class="col-md-4 footer-box">
                <b>Accounts</b>
                <p> <i class="fa fa-dashboard" aria-hidden="true"></i> <a href="dashboard"> Dashboard </a></p>
                <p> <i class="fa fa-address-book-o" aria-hidden="true"></i> <a href="register">Register </a> </p>
                <p> <i class="fa fa-sign-in" aria-hidden="true"></i> <a href="login">Login </a> </p>
                <p> <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#footer">Support </a> </p>
            </div>
            <div class="col-md-4 footer-box">
                <b>Resources</b>
                <p> <i class="fa fa-file" aria-hidden="true"></i> <a href="docs">Docs & APIs </a> </p>
                <p> <i class="fa fa-dollar" aria-hidden="true"></i> <a href="pricing">Pricing </a> </p>
                <p> <i class="fa fa-mortar-board" aria-hidden="true"></i> <a href="jobs">Jobs </a> </p>
                <p> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="contact">Contact </a> </p>
            </div>
            <div class="col-md-4 footer-box">
                <p><b> <a href="#footer">Sunnyvale, California 94043 </a> </b> </p>
                <p> <a href="about">About Brisebox</a> </p>
                <a href="https://twitter.com/thebrisebox/" class="fa fa-twitter"></a>
                <a href="https://linkedin.com/company/thebrisebox" class="fa fa-linkedin"></a>
                <a href="https://pinterest.com/thebrisebox/" class="fa fa-pinterest-square"></a>
                <a href="https://www.facebook.com/thebrisebox/" class="fa fa-facebook"></a>
            </div>
        </div>
        <p class="copyright"> &copy; brisebox 2020 </p>
    </div>
</section>

@endsection