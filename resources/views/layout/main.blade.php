<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="language" content="{{app()->getLocale()}}" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="cleartype" content="on" />
        <meta name="HandheldFriendly" content="true">

        <!-- Mobile meta tags -->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="application-name" content="{{config('app.name', 'CIVIC Group')}}">
        <meta name="apple-mobile-web-app-title" content="{{config('app.name', 'CIVIC Group')}}">
        <meta name="msapplication-starturl" content="/">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/favicons/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('img/favicons/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/favicons/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicons/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/favicons/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/favicons/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/favicons/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/favicons/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicons/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('img/favicons/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/favicons/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicons/favicon-16x16.png')}}">
        <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}"/>
        <link rel="manifest" href="{{asset('img/favicons/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('img/favicons/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">


        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#6cc122">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#6cc122">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#6cc122">

        <title>@if(isset($title) && $title){{$title}} | {{config('app.name', 'CIVIC Group')}}@else{{config('app.name', 'CIVIC Group')}}@endif</title>
        <meta name="description" content="{{!empty($description) ? $description : __('meta.description')}}" />
        <meta name="action" content="index" />
        <link rel="canonical" href="{{!empty($canonical) ? $canonical : url()->current()}}"/>
        <link rel="alternate" hreflang="bs" href="{{localized_route(explode('.', request()->route()->getName())[1], [], 'bs')}}" />
        <link rel="alternate" hreflang="en" href="{{localized_route(explode('.', request()->route()->getName())[1], [], 'en')}}" />
        <link rel="alternate" hreflang="x-default" href="{{localized_route(explode('.', request()->route()->getName())[1], [], 'bs')}}" />

        {!! OpenGraph::render() !!}

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            @include('layout/header')

            @isset($breadcrumbs)
            <nav class="breadcrumbs" aria-label="breadcrumb">
                <div class="container">
                    <ol class="breadcrumb">
                        @foreach ($breadcrumbs as $breadcrumb)
                            @if($loop->last)
                            <li class="breadcrumb-item active" aria-current="page">{{$breadcrumb['label']}}</li>
                            @else
                            <li class="breadcrumb-item"><a href="{{$breadcrumb['link']}}">{{$breadcrumb['label']}}</a></li>
                            @endif
                        @endforeach
                    </ol>
                </div>
            </nav>
            @endisset

            @if( explode('.', request()->route()->getName())[1] == 'home')
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="{{localized_route('profiled_sheets')}}">
                                <img src="{{asset('img/carousel1.jpg')}}" class="d-none d-md-block w-100" alt="profilisani limovi">
                                <img src="{{asset('img/carousel1mobile.jpg')}}" class="d-block d-md-none w-100" alt="profilisani limovi">
                                <div class="carousel-caption">
                                    <h5>{{__('general.profiled_sheets')}}</h5>
                                    <p class="d-none d-md-block">{{__('general.profiled_sheets_subtitle')}}</p>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{localized_route('termopor')}}">
                                <img src="{{asset('img/carousel5.jpg')}}" class="d-none d-md-block w-100" alt="eps">
                                <img src="{{asset('img/carousel5mobile.jpg')}}" class="d-block d-md-none w-100" alt="eps">
                                <div class="carousel-caption">
                                    <h5>EPS</h5>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{localized_route('siege_sheets')}}">
                                <img src="{{asset('img/carousel2.jpg')}}" class="d-none d-md-block w-100" alt="opsavni limovi">
                                <img src="{{asset('img/carousel2mobile.jpg')}}" class="d-block d-md-none w-100" alt="opsavni limovi">
                                <div class="carousel-caption">
                                    <h5>{{__('general.siege_sheets')}}</h5>
                                    <p class="d-none d-md-block">{{__('general.siege_sheets_subtitle')}}</p>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{localized_route('rainwater_system')}}">
                                <img src="{{asset('img/carousel3.jpg')}}" class="d-none d-md-block w-100" alt="sistem oborisnkih voda">
                                <img src="{{asset('img/carousel3mobile.jpg')}}" class="d-block d-md-none w-100" alt="sistem oborisnkih voda">
                                <div class="carousel-caption">
                                    <h5>{{__('general.rainwater_system')}}</h5>
                                    <p class="d-none d-md-block"></p>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{localized_route('snow_stops')}}">
                                <img src="{{asset('img/carousel4.jpg')}}" class="d-none d-md-block w-100" alt="snjegobrani">
                                <img src="{{asset('img/carousel4mobile.jpg')}}" class="d-block d-md-none w-100" alt="snjegobrani">
                                <div class="carousel-caption">
                                    <h5>{{__('general.snow_stops')}}</h5>
                                    <p class="d-none d-md-block">{{__('meta.snow_stops_description')}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="homepage-articles" style="background-color: #e6e7e9;">
                    <div class="container">
                        <br>
                        <h3 class="text-center">{{__('general.news')}}</h3>
                        <br>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <a href="{{localized_route('article1')}}">
                                    <div class="homepage-article">
                                        <img v-lazy="'{{asset('img/articles/cover1.jpg')}}'" alt="civic termoport">
                                        <h5 class="my-3">Čestitka povodom novogodišnjih praznika</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="homepage-logos">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="img">
                                    <img style="width:200px" src="{{asset('img/banner.png')}}" alt="civic banner">
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="img">
                                    <img style="width:200px" v-lazy="'{{asset('img/termopor_2.png')}}'" alt="civic termopor">
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="img">
                                    <img style="width:200px" v-lazy="'{{asset('img/90godina.png')}}'" alt="civic 90 godina">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <img class="w-100 d-none d-md-block" v-lazy="'{{asset('img/photo2.jpg')}}'" alt="civic group">
                <img class="w-100 d-block d-md-none" v-lazy="'{{asset('img/photo2mobile.jpg')}}'" alt="civic group">

                <br>
                <br>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="homepage-block">
                                <h5>{{__('general.we_are_civic')}}</h5>
                                <p>{{__('general.we_are_civic_description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- <img class="w-100 d-none d-md-block" v-lazy="'{{asset('img/photo1.jpg')}}'" alt="civic group">
                <img class="w-100 d-block d-md-none" v-lazy="'{{asset('img/photo1mobile.jpg')}}'" alt="civic group">

                <br>
                <br> --}}

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="homepage-block">
                                <h5><img v-lazy="'{{asset('img/icon1.png')}}'" style="width: 25px;" alt="civic group"> {{__('general.profiled_sheets')}}</h5>
                                <p>{{__('general.profiled_sheets_subtitle')}}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="homepage-block">
                                <h5><img v-lazy="'{{asset('img/icon2.png')}}'" style="width: 25px;" alt="civic group"> {{__('general.metal_constructions')}}</h5>
                                <p>{{__('general.metal_constructions_description')}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="homepage-block">
                                <h5><img v-lazy="'{{asset('img/icon3.png')}}'" style="width: 25px;" alt="civic group"> {{__('general.profiled_facade_sheets')}}</h5>
                                <p>{{__('general.profiled_facade_sheets_description')}}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="homepage-block">
                                <h5><img v-lazy="'{{asset('img/icon4.png')}}'" style="width: 25px;" alt="civic group"> {{__('general.termoisolation')}}</h5>
                                <p>{{__('general.termoisolation_description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <img class="w-100 d-none d-md-block" v-lazy="'{{asset('img/photo7.jpg')}}'" alt="civic group">
                <img class="w-100 d-block d-md-none" v-lazy="'{{asset('img/photo7mobile.jpg')}}'" alt="civic group">

                <br>
                <br>

                <div id="projectFacts" class="sectionClass">
                    <div class="container">
                        <div class="fullWidth eight columns">
                            <div class="projectFactsWrap" id="projectFactsWrap">
                                <div class="item wow fadeInUpBig animated animated" data-number="110000">
                                    <p class="number"><span id="number1">110000</span>+ m3</p>
                                    <p>{{__('general.sold_per_year')}}</p>
                                </div>
                                <div class="item wow fadeInUpBig animated animated" data-number="100">
                                    <p class="number"><span id="number2">100</span>+</p>
                                    <p>{{__('general.qualified_workers')}}</p>
                                </div>
                                <div class="item wow fadeInUpBig animated animated" data-number="50">
                                    <p class="number"><span id="number3">50</span>+</p>
                                    <p>{{__('general.machines')}}</p>
                                </div>
                                <div class="item wow fadeInUpBig animated animated" data-number="500">
                                    <p class="number"><span id="number4">500</span>+</p>
                                    <p>{{__('general.satisfied_clients')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <br>

                <div class="homepage-products">
                    <div class="container">
                        <h3 class="text-center">{{__('general.featured_products')}}</h3>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{localized_route('prestige')}}">
                                    <div class="homepage-product">
                                        <img v-lazy="'{{asset('img/profilisani_limovi/prestige/profile.png')}}'" alt="prestige">
                                        <h5>{{__('general.prestige')}}</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{localized_route('trend')}}">
                                    <div class="homepage-product">
                                        <img v-lazy="'{{asset('img/profilisani_limovi/tr40/RAL3009_transparent_profile.png')}}'" alt="trend">
                                        <h5>{{__('general.trend')}}</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{localized_route('attractive')}}">
                                    <div class="homepage-product">
                                        <img v-lazy="'{{asset('img/profilisani_limovi/tr20/RAL9006_transparent_profile.png')}}'" alt="attractive">
                                        <h5>{{__('general.attractive')}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{localized_route('horizontal_gutter')}}">
                                    <div class="homepage-product">
                                        <img v-lazy="'{{asset('img/metalna_galanterija/horizontalni_oluk/profile.png')}}'" alt="horizontalni oluk">
                                        <h5>{{__('general.horizontal_gutter')}}</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{localized_route('snow_stops')}}">
                                    <div class="homepage-product">
                                        <img v-lazy="'{{asset('img/metalna_galanterija/snjegobrani/example1.jpg')}}'" alt="snjegobrani">
                                        <h5>{{__('general.snow_stops')}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="container pt-4 pb-5">
                    @yield('content')
                </div>
            @endif

            @include('layout/footer')
        </div>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ mix('js/frontend_support.js') }}" defer></script>
    </body>
</html>
