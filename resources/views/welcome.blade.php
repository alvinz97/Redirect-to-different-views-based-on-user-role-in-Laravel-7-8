<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        {{-- <link href="https://rusiruofficial.com/css/main.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito';
            }

            .bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26,32,44,var(--bg-opacity));
            }

            #right img {
                width: 100px;
                height: 100px;
            }
            #left img {
                width: 300px;
                height: 100px;
            }

            .icon-fb {
                color: #3b5998 !important;
            }

            .icon-tw {
                color: #00b9ff !important;
            }

            .icon-web {
                color: #ff4e20 !important;
            }

            .icon-lin {
                color: #0e76a8 !important;
            }
            .icon-insta {
                color: #e4717a !important;
            }

            #social-media ul {
                display: flex;
            }

            #social-media ul li{
                list-style: none;
            }

            #social-media {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                    -ms-flex-pack: center;
                        justify-content: center;
            }

            #social-media .social-icon {
                height: 35px;
                width: 35px;
                border: 1px solid #333;
                margin: 0 20px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                    -ms-flex-pack: center;
                        justify-content: center;
                -webkit-box-align: center;
                    -ms-flex-align: center;
                        align-items: center;
                color: #333;
                font-size: 1.5rem;
                border-radius: 50%;
                -webkit-transition: all .5s ease-in-out;
                transition: all .5s ease-in-out;
                outline: none;
                padding: 25px;
            }

            #social-media .social-icon:focus {
                outline: none;
            }

            #social-media .social-icon:hover {
                font-size: 1.25rem;
            }
            #social-media-section {
                padding: 20px 0;
            }
            #social-media-section .header {
                padding: 18px 0;
            }

            a {
                text-decoration: none;
            }

            a:hover {
                text-decoration: none;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app">
            <div class="container-fluid bg-gray-900">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#">Redirect to different views based on user role in Laravel 7/8</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @if (Route::has('login'))
                            <ul class="navbar-nav ml-auto">
                                @auth
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                @else
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                                        </li>
                                    @endif
                                @endif 
                            </ul>
                        @endif
                    </div>
                </nav>
            </div>

            <div class="bg-gray-900">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 justify-content-center align-items-center text-center" id="left">
                            <img src="{{url('/images/laravel7,8.png')}}" alt="" class="img-fluid">
                        </div>

                        <div class="col-lg-6 justify-content-center align-items-center text-center" id="right">
                            <img src="{{url('/images/fav-icon.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid p-0">
                <img src="https://raw.githubusercontent.com/alvinz97/alvinz97/master/banner_new.png" alt="" class="img-fluid">
            </div>

            <div class="bg-gray-900">
                <div class="container"  id="social-media-section">
                    <div class="header text-light text-center">
                        <h1>Socila Media</h1>
                    </div>
                    <div class="row text-center" id="social-media">
                        <div class="col-lg-6 justify-content-center align-items-center">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/rusiru.alvin97" class="social-icon custom-circle" target="_blank" title="Facebook"> <i class="fa fa-facebook-f icon-fb"></i> </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Alvinz_97" class="social-icon custom-circle" target="_blank" title="Twitter"> <i class="fa fa-twitter icon-tw"></i> </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/rusiru-kulathunga-86033817a/" class="social-icon custom-circle" target="_blank" title="LinkedIn"> <i class="fa fa-linkedin icon-lin"></i> </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/alvinz97/" class="social-icon custom-circle" target="_blank" title="Instagram"> <i class="fa fa-instagram icon-insta"></i> </a>
                                </li>
                                <li>
                                    <a href="https://rusiruofficial.com/" class="social-icon custom-circle" target="_blank" title="Website"> <i class="fa fa-chrome icon-web"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
