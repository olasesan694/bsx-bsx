<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="{{ url('/') }}"><img src="/images/logo.png" alt="brisebox logo">{{ config('app.name', 'brisebox') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">--- <br> ---</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-uppercase">
                @guest
                    <li class="nav-item active">
                        <a class="nav-link" href="https://retailers.brisebox.com/docs">Docs & API </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://retailers.brisebox.com/pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://retailers.brisebox.com/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }} </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="docs">Docs & API </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ url('/home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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