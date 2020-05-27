<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dashboard | Brisebox</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light">
                <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- sidebar -->
                            <div class="col-xl-2 col-lg-3 sidebar fixed-top">
                                <a href="{{ url('/') }}" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">
                                    <img src="/images/logo.png" alt="brisebox logo">BRISEBOX
                                </a>
                                <div class="bottom-border pb-3">
                                    {{-- <img src="people.png" alt="admin" class="rounded-circle mr-3" width="50"> --}}
                                    <a href="#" class="text-white">Admin</a>
                                </div>
                                <ul class="navbar-nav flex-column mt-4">
                                    <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 current">Get Started</a></li>
                                    <li class="nav-item"><a href="docs" class="nav-link text-white p-3 mb-2 sidebar-link">Try it</a></li>
                                    <li class="nav-item"><a href="docs" class="nav-link text-white p-3 mb-2 sidebar-link">Docs</a></li>
                                    <li class="nav-item"><a href="docs" class="nav-link text-white p-3 mb-2 sidebar-link">API</a></li>
                                    <li class="nav-item"><a href="contact" class="nav-link text-white p-3 mb-2 sidebar-link">Sales</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">Analytics</a></li>
                                    <li class="nav-item"><a href="contact" class="nav-link text-white p-3 mb-2 sidebar-link">Support</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">Settings</a></li>
                                    <!-- <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li> -->
                                    {{-- <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-user text-light fa-lg mr-3"></i>Get Started</a></li>
                                    <li class="nav-item"><a href="docs" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table text-light fa-lg mr-3"></i>Try it</a></li>
                                    <li class="nav-item"><a href="docs" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-alt text-light fa-lg mr-3"></i>Docs</a></li>
                                    <li class="nav-item"><a href="docs" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-shopping-cart text-light fa-lg mr-3"></i>API</a></li>
                                    <li class="nav-item"><a href="contact" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>Sales</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>Analytics</a></li>
                                    <li class="nav-item"><a href="contact" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Support</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-wrench text-light fa-lg mr-3"></i>Settings</a></li> --}}
                                </ul>
                            </div>
                            <!-- end sidebar  -->
        
                            <!-- top-nav  -->
                            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <h4 class="text-light mb-0">Dashboard</h4>
                                    </div>
                                    <div class="col-md-5">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control search-input" placeholder="Search ..">
                                                <button type="button" class="btn btn-white search-button text-white">SEARCH</button>
                                                {{-- <button type="button" class="btn btn-white search-button"><li class="fas fa-search text-danger"></li></button> --}}
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="navbar-nav">
                                            {{-- <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><li class="fas fa-comments text-muted fa-lg"></li></a></li>
                                            <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><li class="fas fa-bell text-muted fa-lg"></li></a></li> --}}
                                            <li class="nav-item ml-md-auto"><a href="{{ url('/home') }}" class="nav-link ml-auto text-white">Sign Out</a></li>
                                            {{-- <li class="nav-item ml-md-auto"><a href="#" class="nav-link ml-auto" data-toggle="modal" data-target="asign-out"><li class="fas fa-sign-out-alt text-danger fa-lg"></li></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end of top-nav  -->
                        </div>
                    </div>
                </div>
            </nav>
            <main class="py-0">
                @yield('content')
            </main>
        </div>
    </body>
</html>
