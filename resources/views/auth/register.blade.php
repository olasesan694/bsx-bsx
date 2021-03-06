@extends('layouts.register.head')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1> Create your Account. </h1> <p> Try the Brisebox Sample in Action. </p> </div>

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
                                <label for="email" class="col-md-4 col-form-label text-md-right">Support Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Company support email.." required autocomplete="email">

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
                                    <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="domain" class="col-md-4 col-form-label text-md-right">Website URL</label>

                                <div class="col-md-6">
                                    <input id="domain" type="text" class="form-control @error('domain') is-invalid @enderror" name="domain" value="{{ old('domain') }}" placeholder="https://www.example.com" required autocomplete="domain">

                                    @error('domain')
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
                                    {{-- <p style="color:#ccc">By creating an account you agree to our <a href="privacy">Terms & Privacy</a>.</p> --}}
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
            <p>Your Free Plan, as well as all our Paid Plans, includes a personal onboarding assistant, available via the chat. Feel free to ask all your questions in the chat and you can count on us to do our best to provide you with an outstanding support.</p>
            </div>
        
            <button class="accordion">WHAT IF I WANT TO TRY A CUSTOM PLAN FOR MORE TEAM MEMBERS?</button>
            <div class="panel">
            <p>Just register your Free Plan account and chat with us from your Brisebox account explaining what custom plan you want to try. We’ll ask you just a few questions and will set up your Custom Plan account according to your requirements.</p>
            </div>
            
            <button class="accordion">DO I NEED TO ENTER MY CREDIT CARD DATA DURING THE TRIAL PERIOD?</button>
            <div class="panel">
            <p>You do not have to enter your card information if you do not want to. The Free Plan period does not require a credit card. You should enter your billing information only when you decide to subscribe to a Paid Plan.</p>
            </div>
            
        <h6>Have more questions? Join the Q&A, <a href="{{ url('/contact') }}" target="_blank" rel="noopener noreferrer">Talk with us</a></h6>
        
        </div>
    </section>

    @include('footer')

@endsection
