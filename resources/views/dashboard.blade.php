@extends('layouts.dashboard.head')

@section('content')
    <!-- modal  -->
    <div class="modal fade" id="sign-out">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Want to leave?</h4>
                    <button type="button" class="close" data-dismiss="modal"> &times; </button>
                </div>
                <div class="modal-body">
                    Press logout to leave
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of model  -->

    <!-- cards  -->
    <section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row pt-5 mt-md-3 mb-5">
                    <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Plan</h5>
                                        <h3>Free</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fas fa-sync mr-3"></i>
                                <span>Optional Upgrade: begins 12/11/2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Get help with Integration</h5>
                                        <h3>Support</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fas fa-sync mr-3"></i>
                                <span>support@brisebox.com</span>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Get a Free Standard Plan Upgrade for 1yr</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fas fa-sync mr-3"></i>
                                <span><a href="#invite">Invite someone that can use brisebox</a></span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end of cards  -->

    <!-- tables  -->
    <section id="tables">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row">
                    <div class="col-12">
                        {{-- <h3 class="text-muted text-center mb-3">Allow <div style="font-style: italic; display:inline;"> Live </div> User-To-User Discussions on your Website.</h3> --}}
                        <h3 class="text-muted text-center mb-3">What's Next?</h3>
                        <ul class="list-group">
                            <li class="list-group-item ">Get Started By: <li>
                            <li class="list-group-item">(1). Trying the Brisebox Button to see how it will look for your users </li>
                            <li class="list-group-item">(2). Copying & downloading code for your HTML page and website</li>
                            <li class="list-group-item">(3). Setting your website info</li>
                            <li class="list-group-item">(4). Done. Enjoy more users, sell more and faster on your platform.</li>
                        </ul>
                        <a href="docs" class="btn btn-danger btn-lg">Start 3 steps</a>
                    </div>
                    <div class="col-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-muted mb-3"> View New Customer Live Chat Requests:  </h3>
                        <br>
                        <a href="https://connect.brisebox.com/accept" class="btn btn-danger btn-lg">Join Discussion</a>
                    </div>
                    <div class="col-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-muted mb-3"> Issues Checklist:  </h3>
                        <ul>
                            <li> Make sure meta tags are modified completely (including the 'bb:' og graph).  </li>
                            <li> The website url you registered should match the format: https://www.example.com </li>
                            <li> Click the 'Join Disucssions' button and click accept often to view new chat requests from customers as they're updated.</li>                            
                        </ul>
                        <p> For support, <a href="contact">contact brisebox support </a> </p>
                    </div>
                    <div class="col-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    {{-- <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h2>Invite Someone New </h2></div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ action('WelcomeController@c') }}">
                                @csrf
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <input type="hidden" name="inviter" value="{{ $Auth::id() }}">
        
                                <div id="invite" class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Guest Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="new-name">
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Guest E-Mail Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="domain" class="col-md-4 col-form-label text-md-right">{{ __('Guest Website URL') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="domain" type="text" class="form-control @error('domain') is-invalid @enderror" name="domain" value="{{ $email ?? old('domain') }}" placeholder="https://example.com" required autocomplete="domain" autofocus>
        
                                        @error('domain')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Invitation') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection