<link href="{{ asset('css/footer-white.css') }}" rel="stylesheet">

<!-- Footer -->
<section id="footer">
    <div class="container">
        <div class="row offset-1">
            <div class="col-md-4 footer-box">
                <b>Accounts</b>
                <p> <i class="fa fa-dashboard" aria-hidden="true"></i> <a href="{{ route('dashboard') }}"> Dashboard </a></p>
                <p> <i class="fa fa-address-book-o" aria-hidden="true"></i> <a href="register">Register </a> </p>
                <p> <i class="fa fa-sign-in" aria-hidden="true"></i> <a href="login"> Login </a> </p>
                <p> <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="{{ route('contact') }}">Contact </a> </p>
            </div>
            <div class="col-md-4 footer-box">
                <b>Resources</b>
                <p> <i class="fa fa-file" aria-hidden="true"></i> <a href="{{ route('docs') }}">Docs & APIs </a> </p>
                <p> <i class="fa fa-dollar" aria-hidden="true"></i> <a href="{{ route('pricing') }}">Pricing </a> </p>
                <p> <i class="fa fa-mortar-board" aria-hidden="true"></i> <a href="{{ route('jobs') }}">Jobs </a> </p>
                <p> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="{{ route('blog.index') }}">Blog </a> </p>
            </div>
            <div class="col-md-4 footer-box">
                <p><b> <a href="#footer">Sunnyvale, California 94043 </a> </b> </p>
                <p> <a href="{{ route('about') }}">About Brisebox</a> </p>
                <a href="https://twitter.com/thebrisebox/" class="fa fa-twitter"></a>
                <a href="https://linkedin.com/company/thebrisebox" class="fa fa-linkedin"></a>
                <a href="https://pinterest.com/thebrisebox/" class="fa fa-pinterest-square"></a>
                <a href="https://www.facebook.com/thebrisebox/" class="fa fa-facebook"></a>
            </div>
        </div>
        <p class="copyright"> &copy; brisebox {{ date('Y') }} </p>
    </div>
</section>