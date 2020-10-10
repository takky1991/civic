@extends('layout.main')

@section('content')
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
            <a href="{{localized_route('thermopor')}}">
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

<!-- <div class="homepage-articles" style="background-color: #e6e7e9;">
    <div class="container">
        <br>
        <h3 class="text-center">{{__('general.news')}}</h3>
        <br>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <a href="{{localized_route('article1')}}">
                    <div class="homepage-article">
                        <img v-lazy="'{{asset('img/articles/cover1.jpg')}}'" alt="civic thermoport">
                        <h5 class="my-3">Čestitka povodom novogodišnjih praznika</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> -->

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

<br>
<div class="homepage-logos">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="img">
                    <img style="width:200px" src="{{asset('img/banner.png')}}" alt="civic banner">
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="img">
                    <img style="width:200px" v-lazy="'{{asset('img/thermopor_2.png')}}'" alt="civic thermopor">
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="img">
                    <img style="width:200px" v-lazy="'{{asset('img/90godina.png')}}'" alt="civic 90 godina">
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<img class="w-100 d-none d-md-block" v-lazy="'{{asset('img/photo7.jpg')}}'" alt="civic group">
<img class="w-100 d-block d-md-none" v-lazy="'{{asset('img/photo7mobile.jpg')}}'" alt="civic group">

<br>
<br>

<div id="projectFacts" class="sectionClass">
    <div class="container">
        <div class="fullWidth eight columns">
            <div class="projectFactsWrap" id="projectFactsWrap">
                <div class="item wow fadeInUpBig animated animated" data-number="110">
                    <div class="icon">
                        <i class="fa fa-th"></i>
                    </div>
                    <p class="number"><span id="number1">110</span>+</p>
                    <p>{{__('general.sold_per_year')}}</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="100">
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <p class="number"><span id="number2">100</span>+</p>
                    <p>{{__('general.qualified_workers')}}</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="50">
                    <div class="icon">
                        <i class="fa fa-truck"></i>
                    </div>
                    <p class="number"><span id="number3">50</span>+</p>
                    <p>{{__('general.machines')}}</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" data-number="500">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
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

<img class="w-100 d-none d-md-block" v-lazy="'{{asset('img/photo2.jpg')}}'" alt="civic group">
<img class="w-100 d-block d-md-none" v-lazy="'{{asset('img/photo2mobile.jpg')}}'" alt="civic group">
<br>
<br>
@endsection