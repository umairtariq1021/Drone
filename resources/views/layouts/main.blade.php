<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600,700,900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/layouts/main.css') }}">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <div id="terms-of-service">
            <p>
                We've recently improved our Licensing
                <a href="#">Terms of Service</a>
                for your benefit. Please review and accept.
                <button class="btn btn-danger">I accept new terms</button>
            </p>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    Shutterstock
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
                                <a class="nav-link" id="login-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" id="signup-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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

        <div id="search-bar" class="row">
            <div class="col-md-11 form-row">
                <div class="col-11">
                    <div class="">
                        <input type="text" class="form-control input-search" placeholder="Search royalty-free images, vectors, and illustrations">
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <input type="submit" class="btn btn-danger input-search-btn" value="Search">
                    </div>
                </div>

            </div>
            <div class="col categories-drpdwn">
                <p>Categories</p>
            </div>

            {{-- <div class="row categories"> --}}
                {{-- <div class="col-md-4">Yo</div> --}}
                {{-- <div class="col-md-4">Yo</div> --}}
                {{-- <div class="col-md-4">Yo</div> --}}
            {{-- </div> --}}


        </div>


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="footer">
        <div class="row">
            <div class="col">
                <div class="row">
                    <b>Our company</b>
                </div>
                <div class="row">
                    Sell content
                </div>
                <div class="row">
                    Subscribe/Renew
                </div>
                <div class="row">
                    About us
                </div>
                <div class="row">
                    Careers
                </div>
                <div class="row">
                    Press/Media
                </div>
                <div class="row">
                    Investor relations
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <b>Shutterstock</b>
                </div>
                <div class="row">
                    Home
                </div>
                <div class="row">
                    Stock photos
                </div>
                <div class="row">
                    Vector images
                </div>
                <div class="row">
                    Editorial
                </div>
                <div class="row">
                    Footage
                </div>
                <div class="row">
                    Music
                </div>
                <div class="row">
                    Blog
                </div>
                <div class="row">
                    Coupons
                </div>
                <div class="row">
                    Royalty free images
                </div>
                <div class="row">
                    Trending topics
                </div>
            </div>
            <div class="col">
                    <div class="row">
                       <b>Discover</b>
                    </div>
                    <div class="row">
                        Bigstock
                    </div>
                    <div class="row">
                        Offset
                    </div>
                    <div class="row">
                        Premier
                    </div>
                    <div class="row">
                        PremiumBeat
                    </div>
                    <div class="row">
                        Custom
                    </div>
                    <div class="row">
                        Apps
                    </div>
                    <div class="row">
                        Mobile apps
                    </div>
            </div>
            <div class="col">
                    <div class="row">
                        <b>Help</b>
                    </div>
                    <div class="row">
                        Support center
                    </div>
                    <div class="row">
                        Partner
                    </div>
                    <div class="row">
                        <b>Developer</b>
                    </div>
                    <div class="row">
                        Affiliate/Reseller
                    </div>
                    <div class="row">
                        International reseller
                    </div>
                    <div class="row">
                        <b>Legal</b>
                    </div>
                    <div class="row">
                        Terms of use
                    </div>
                    <div class="row">
                        Privacy policy
                    </div>
                    <div class="row">
                        License agreement
                    </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://use.fontawesome.com/e73594eb56.js"></script>
    @yield('scripts')
    <script>
        $(document).ready(function() {
            $('#login-link, #signup-link').click(function(event) {
                event.preventDefault();
                let registerClicked = event.target.toString().indexOf('register')!==-1
                let loginClicked = event.target.toString().indexOf('login')!==-1

                if(loginClicked) {
                    $('#login-form').css('display', 'block');
                } else if (registerClicked) {
                    $('#signup-form').toggleClass('displayModal');
                }

            });
        });
    </script>
</body>
</html>
