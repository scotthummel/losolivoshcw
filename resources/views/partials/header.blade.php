<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', 'Los Olivos Hand Car Wash')" />
    <title>@yield('title')</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@include('partials.flash_message')

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li {{ isActive('/') }}><a href="/">Home</a></li>
                <li {{ isActive('about') }}><a href="/about">About</a></li>
                <!--<li {{ isActive('reviews') }}><a href="/reviews">Reviews</a></li>-->
                <li {{ isActive('a-la-carte') }}><a href="/a-la-carte">A La Carte</a></li>
                <li {{ isActive('combinations') }}><a href="/combinations">Combination Packages</a></li>
                <li {{ isActive('specials') }}><a href="/specials">Specials</a></li>
                <li {{ isActive('location') }}><a href="/location">Location</a></li>
                <li {{ isActive('detailing') }}><a href="/detailing">Detailing Packages</a></li>
                <li {{ isActive('contact') }}><a href="/contact">Contact Us</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">

    <div class="wrap">
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 address">
                <img src="/images/losolivos_logo.png" class="img-responsive" alt="Los Olivos Hand Car Wash logo" />
                <p>232 East McDowell Road<br />
                    Phoenix, Arizona 85004
                </p>

                <p>602.258.2822</p>

                <p>Hours:<br />
                    Mon-Sat  8:00 am – 5:25 pm<br />
                    Sunday   9:00 am – 3:00 pm<br />
                </p>
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 get-clean">
            @if (Request::path() == 'about')
                @include('partials.carousel');
            @else
                @include('partials.get-clean');
            @endif
            </div>
        </div>
    </div>