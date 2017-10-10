<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <!-- START HEAD-->
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>КП "КИЇВСЬКИЙ МІСЬКИЙ БУДИНОК ПРИРОДИ"</title>
        <!-- Owl-carousel CSS-->
        <link rel="stylesheet" href="css/libs/owl.carousel.min.css"/>
        <!--link(rel='stylesheet', href='libs/owl.carousel/dist/assets/owl.theme.default.min.css')-->
        <!-- AnimateJS-->
        <link rel="stylesheet" href="css/libs/animate.min.css"/>
        <!-- MapBox free MAP-->
        <!--script(src='https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.js')-->
        <!--link(rel='stylesheet', href='https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.css')-->
        <!-- Leaflet free MAP-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"/>
        <!-- CSS-->
        <link rel="stylesheet" href="css/custom.css"/>
        <!--Fonts css-->
        <link rel="stylesheet" href="css/fonts/mapglyphs/2.0/mapglyphs.css"/>
        <link rel="stylesheet" href="css/fonts/font-awesome/font-awesome.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cormorant|Open+Sans"/>
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i|Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i|Alice|Andika|Anonymous+Pro:400,400i,700,700i|Arimo:400,400i,700,700i|Arsenal:400,400i,700,700i|Bad+Script|Cabin:400,400i,500,500i,600,600i,700,700i|Comfortaa:300,400,700|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i|Cormorant+Infant:300,300i,400,400i,500,500i,600,600i,700,700i|Cormorant+SC:300,400,500,600,700|Cormorant+Unicase:300,400,500,600,700|Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i|Cousine:400,400i,700,700i|Cuprum:400,400i,700,700i|Didact+Gothic|EB+Garamond|El+Messiri:400,500,600,700|Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Fira+Mono:400,500,700|Fira+Sans+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Fira+Sans+Extra+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Forum|Gabriela|Inconsolata:400,700|Istok+Web:400,400i,700,700i|Jura:300,400,500,600,700|Kelly+Slab|Kurale|Ledger|Lobster|Lora:400,400i,700,700i|Marck+Script|Marmelad|Merriweather:300,300i,400,400i,700,700i,900,900i|Neucha|Noto+Sans:400,400i,700,700i|Noto+Serif:400,400i,700,700i|Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Old+Standard+TT:400,400i,700|Open+Sans+Condensed:300,300i,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Oranienbaum|Oswald:200,300,400,500,600,700|PT+Mono|PT+Sans+Caption:400,700|PT+Sans+Narrow:400,700|PT+Sans:400,400i,700,700i|PT+Serif+Caption:400,400i|PT+Serif:400,400i,700,700i|Pacifico|Pangolin|Pattaya|Philosopher:400,400i,700,700i|Play:400,700|Playfair+Display+SC:400,400i,700,700i,900,900i|Playfair+Display:400,400i,700,700i,900,900i|Podkova:400,500,600,700,800|Poiret+One|Prata|Press+Start+2P|Prosto+One|Quicksand:300,400,500,700|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab:100,300,400,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Rubik+Mono+One|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i|Ruslan+Display|Russo+One|Scada:400,400i,700,700i|Seymour+One|Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i|Stalinist+One|Tenor+Sans|Tinos:400,400i,700,700i|Ubuntu+Condensed|Ubuntu+Mono:400,400i,700,700i|Ubuntu:300,300i,400,400i,500,500i,700,700i|Underdog|VT323|Yanone+Kaffeesatz:200,300,400,700|Yeseva+One&amp;amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"/>
    </head>
    <!-- END NAV-->
    <body>
        @yield('preloader')
        @yield('preloader')
        @yield('preloader')
        @yield('preloader')
        @yield('preloader')
        @yield('preloader')
        @yield('preloader')

        <!--START PRELOADER-->
        <div id="page-preloader"></div>
        <!--END PRELOADER-->
        <!-- START NAV-->
        <nav id="nav">
            <figure><a href="/"><img class="logo" src="img/logo_budinok_prirodi.png" alt="Київський Міський Будинок Природи"></a>
                <figcaption>
                    <h4>КП "Київський міський Будинок природи"</h4>
                </figcaption>
            </figure>
            <menu>
                <ul>
                    <li><a href="#history">Історія</a></li>
                    <li><a href="#workers">Колектив</a></li>
                    <li><a href="#news">Новини</a></li>
                    <li><a href="#shows">Виставки</a></li>
                    <li><a href="#events">Події та заходи</a></li>
                    <li><a href="#compititions">Конкурси</a></li>
                    <li><a href="#published">Наші видання</a></li>
                    <li><a href="#footer">Контакти</a></li>
                </ul>
            </menu>
        </nav>
        <!-- END NAV-->
        <div class="container">
            @yield('content')
        </div>
        <!-- START btn-to-top-->
        <button class="btn-top" title="Вгору!">
            <div class="wrap"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
        </button>
        <!-- START btn-to-top-->
        @include('layouts.scripts')
    </body>
</html>


{{--<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
--}}{{--                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>--}}{{--

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('profile') }}">Профіль</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Вийти
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>--}}
