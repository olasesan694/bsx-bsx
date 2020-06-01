<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168065262-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    </script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Register, and create your account in Brisebox."/>
    <meta property="og:title" content="Create Brisebox Account"/>
    <meta property="og:url" content="https://retailers.brisebox.com/register"/>
    <meta property="og:description" content="Create your account, Brisebox."/>
    <meta property="og:type" content="website"/>

    <title>Register | Brisebox</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/faq.js') }}" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <style>
        /* .card {
            height: 55vh;
        } */

        .card-header {
            font-size: 25px;
            padding: 15px;
            /* background-color: #282639; */
            background-color: #000000; 
            color: pink;
        }

        .card-header p {
            font-size: 13px;
        }

        .btn-register {
            width: 150px;
        }

        /* -------------------- FAQ ----------------------- */
.faq {
    height: 100vh;
}

.faq h2{
    color: rgb(85, 85, 85);
    padding-top: 100px;
    padding-bottom: 30px;
}

.faq h6 {
    color: rgb(141, 141, 141);
    padding-top: 50px;
}

.accordion {
  background-color: white;
  color: #282639;
  cursor: pointer;
  padding: 30px;
  width: 100%;
  border: 1px solid whitesmoke;
  text-align: left;
  outline: none;
  font-size: 20px;
  font-weight: 900;
  transition: 0.4s;
  text-transform: uppercase;
  }
  
  .active, .accordion:hover {
    background-color: whitesmoke; 
  }
  
  .panel {
    padding: 18px;
    display: none;
    background-color: #ffffff;
    overflow: hidden;
  }

  .panel p {
      color: #000000;
      font-size: 16px;
  }
/* END FAQ */

#footer {
  /* background-color: rgb(187, 187, 187); */
  background-color: #282639;
  color: #fff;
}

.footer-box {
  padding: 50px;
}

.footer-box .fa {
  margin-right: 8px;
  font-size: 25px;
  height: 40px;
  width: 40px;
  text-align: center;
  padding-top: 7px;
  border-radius: 2px;
  background-color: none;
}

.footer-box a {
  font-size: 12px;
  color: white;
}

.footer-box .form-control {
  box-shadow: none !important;
  border: none;
  border-radius: 0;
  margin-top: 25px;
  max-width: 250px;
  background-color: whitesmoke;
}

.footer-box .btn-primary {
  box-shadow: none;
  border: none;
  border-radius: 0;
  margin-top: 30px;
  background-image: linear-gradient(to right, #411c4b, #a517ba);
}

hr {
  background-color: #979696;
}

.copyright {
  margin-bottom: 0;
  padding-bottom: 20px;
  text-align: center;
}
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/logo.png" alt="brisebox logo" style="width:50px; height:50px;">{{ config('app.name', 'brisebox') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
