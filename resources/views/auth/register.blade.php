@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Try the Brisebox Sample in Action. <p> Create your Account. </p> </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company" class="col-md-4 col-form-label text-md-right">Company Name</label>

                            <div class="col-md-6">
                                <input id="company" type="company" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" required autocomplete="company">

                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-register">
                                    TRY SAMPLE
                                </button>
                                Have an Account?
                                    <a class="" href="login">
                                        LOGIN 
                                    </a>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <p style="color:#ccc">By creating an account you agree to our <a href="privacy">Terms & Privacy</a>.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="faq" class="faq">
    <div class="container text-center">
        <h2>Join the Talk.</h2>

        <button class="accordion">WHAT ABOUT SUPPORT?</button>
        <div class="panel">
          <p>Your Free Plan, as well as all our Paid Plans, includes a personal onboarding assistant, available via the chat. Feel free to ask all your questions in the chat and be sure we’ll do our best to provide you with an outstanding support.</p>
        </div>
    
        <button class="accordion">WHAT IF I WANT TO TRY A CUSTOM PLAN FOR MORE TEAM MEMBERS?</button>
        <div class="panel">
          <p>Just register your Free Plan account and chat with us from your Brisebox account explaining what custom plan you want to try. We’ll ask you just a few questions and will set up your Free Plan account according to your requirements.</p>
        </div>
        
        <button class="accordion">DO I NEED TO ENTER MY CREDIT CARD DATA DURING THE TRIAL PERIOD?</button>
        <div class="panel">
          <p>You do not have to enter your card information if you do not want to. The Free Plan period does not require a credit card. You should enter your billing information only when you decide to subscribe to a Paid Plan.</p>
        </div>
        
    <h6>Have more questions? Join the Q&A, <a href="{{ url('/contact') }}" target="_blank" rel="noopener noreferrer">Talk with us</a></h6>
    
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
