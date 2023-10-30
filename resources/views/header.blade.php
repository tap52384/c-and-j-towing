<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Font Awesome 4.7.0 CDN -->
        <!-- https://fontawesome.com/v4.7.0/icons/ -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

        <meta name="description" content="C & J Towing Services" />
        <meta name="author" content="Z. Patrick Lewis" />

        <title>C &amp; J Towing Services</title>

        <link rel="dns-prefetch" href="//fonts.googleapis.com" />

        <!-- Favicons -->
        <meta name="theme-color" content="#563d7c" />

        <!-- https://laravel.com/docs/6.x/csrf#csrf-x-csrf-token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="top-nav">
            <div class="container">
                <a class="navbar-brand" href="/" title="Home">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" />
                </a>
                <!-- the collapse button-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                    aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item @if(Route::currentRouteName() === 'home') active @endif">
                            <a class="nav-link" href="/">Home @if(Route::currentRouteName() === 'home') <span class="sr-only">(current)</span> @endif</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() === 'about') active @endif">
                            <a class="nav-link" href="/about">About Us @if(Route::currentRouteName() === 'about') <span class="sr-only">(current)</span> @endif</a>
                        </li>
                        <li class="nav-item dropdown @if(Route::currentRouteName() === 'services') active @endif">
                                <a class="nav-link dropdown-toggle" href="/services" id="dropdown01"
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Services @if(Route::currentRouteName() === 'services') <span class="sr-only">(current)</span>@endif</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                @foreach($serviceList as $service)
                                <a class="dropdown-item" href="/services#{{ $service['anchor-name'] }}" title="{{ $service['display-name'] }}">{{ $service['display-name'] }}</a>
                                @endforeach
                                </div>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() === 'gallery') active @endif">
                            <a class="nav-link" href="/gallery">Gallery @if(Route::currentRouteName() === 'gallery') <span class="sr-only">(current)</span> @endif</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() === 'employment') active @endif">
                            <a class="nav-link" href="/employment">Employment @if(Route::currentRouteName() === 'employment') <span class="sr-only">(current)</span> @endif</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() === 'contact') active @endif">
                            <a class="nav-link" href="/contact">Contact Us @if(Route::currentRouteName() === 'contact') <span class="sr-only">(current)</span> @endif</a>
                        </li>
                    </ul>
                    <a href="tel:+19842440240" title="Call Us Now!" class="btn btn-outline-light">(984) 244-0240</a>
                    <ul class="navbar-nav ml-2 social-links-top">
                        <li class="mr-2">
                            <a href="https://www.facebook.com/pg/cnjtowingandrecovery" title="Facebook" target="_blank" rel="noreferrer noopener">
                                <i class="fa-2x fa fa-facebook "></i>
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="https://www.instagram.com/cjtowingllc/" title="Instagram" target="_blank" rel="noreferrer noopener">
                                <i class="fa-2x fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="https://www.yelp.com/biz/c-and-j-towing-raleigh" title="Yelp" target="_blank" rel="noreferrer noopener">
                                <i class="fa-2x fa fa-yelp"></i>
                            </a>
                        </li>
                    </ul>

                </div> <!-- /.collapse -->

            </div> <!-- /.container -->
        </nav>
