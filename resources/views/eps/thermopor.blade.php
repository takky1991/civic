@extends('layout.main')

@section('content')
<div class="thermopor-homepage">
    <div>
        <img class="w-100" src="{{asset('img/eps/home.jpg')}}" alt="civic">
    </div>
    
    <br>
    <br>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 thermopor-subheader one mb-5">
                <p class="mb-4">{{__('general.pearl_among_plastics')}}</p>
                <img class="w-100" src="{{asset('img/eps/packaging/thermopor_packaging_100.png')}}" alt="civic">
            </div>
            <div class="col-md-4 thermopor-subheader two mb-5">
                <img class="w-100 mb-4" src="{{asset('img/eps/styropor_ploce.jpg')}}" alt="civic">
                <h5 class="text-uppercase">{{__('general.what_is_stiropor')}}</h5>
                <p>{{__('general.what_is_stiropor_description')}}</p>
                <a href="{{localized_route('eps_products')}}">{{__('general.see_more')}}...</a>
            </div>
            <div class="col-md-4 thermopor-subheader three mb-5">
                <img class="w-100 mb-4" src="{{asset('img/eps/granule.jpg')}}" alt="civic">
                <h5 class="text-uppercase">{{__('general.advantages_eps')}}</h5>
                <p>{{__('general.advantages_eps_description')}}</p>
                <a href="{{localized_route('eps_advantages')}}">{{__('general.see_more')}}...</a>
            </div>
        </div>
    </div>

    <br>
    
    <div class="sectionClass p-5">
        <div class="text-center font-weight-bold" style="font-size:35px; color: #58595b;">
            {{__('general.98_2')}}
        </div>
    </div>
    
    <br>
    <br>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p style="color: #58595b; font-size: 20px;"><span class="font-size: 24px;">THERMOPOR</span> {{__('general.thermopor_homepage_line')}}...</p>
            </div>
            <div class="col-md-4">
                <img class="w-100" src="{{asset('img/banner.png')}}" alt="civic">
            </div>
        </div>
    </div>
    
    <br>
    <br>
    
    <div class="container thermopor-products">
        <div class="products">
            <h4 class="title"><span class="font-weight-bold">stropovi,</span> <span class="font-weight-bold white">krovovi,</span> <span class="font-weight-bold">zidovi,</span> <span class="white font-weight-bold">podovi</span></h4>
        </div>
    
        <div class="row line1">
            <div class="col-md-4">
                <a href="{{localized_route('eps_f60')}}">
                    <img v-lazy="'{{asset('img/eps/FE60_F80_70.png')}}'" class="img-fluid" alt="Responsive image">
                </a>
                <h4 class="product-name">{{__('general.eps_f60')}}</h4>
                <h5 class="product-description">{{__('general.facade_insulation')}}</h5>
            </div>
    
            <div class="col-md-4">
                <a href="{{localized_route('eps_70')}}">
                    <img v-lazy="'{{asset('img/eps/FE60_F80_70.png')}}'" class="img-fluid" alt="Responsive image">
                </a>
                <h4 class="product-name">{{__('general.eps_70')}}</h4>
                <h5 class="product-description">{{__('general.attic_insulation')}}</h5>
            </div>
    
            <div class="col-md-4">
                <a href="{{localized_route('eps_f80')}}">
                    <img v-lazy="'{{asset('img/eps/FE60_F80_70.png')}}'" class="img-fluid" alt="Responsive image">
                </a>
                <h4 class="product-name">{{__('general.eps_f80')}}</h4>
                <h5 class="product-description">{{__('general.facade_insulation')}}</h5>
            </div>
        </div>   
    
        <div class="row line2">
            <div class="col-md-4">
                <a href="{{localized_route('eps_100')}}">
                    <img v-lazy="'{{asset('img/eps/100_150_200.png')}}'" class="img-fluid" alt="Responsive image">
                </a>
                <h4 class="product-name">{{__('general.eps_100')}}</h4>
                <h5 class="product-description">{{__('general.floor_insulation')}}</h5>
            </div>
    
            <div class="col-md-4">
                <a href="{{localized_route('eps_150')}}">
                    <img v-lazy="'{{asset('img/eps/100_150_200.png')}}'" class="img-fluid" alt="Responsive image">
                </a>    
                <h4 class="product-name">{{__('general.eps_150')}}</h4>
                <h5 class="product-description">{{__('general.high_load_insulation')}}</h5>
            </div>
    
            <div class="col-md-4">
                <a href="{{localized_route('eps_200')}}">
                    <img v-lazy="'{{asset('img/eps/100_150_200.png')}}'" class="img-fluid" alt="Responsive image">
                </a>
                <h4 class="product-name">{{__('general.eps_200')}}</h4>
                <h5 class="product-description">{{__('general.high_load_insulation')}}</h5>
            </div>
        </div>
    </div>

    <div class="paragraph-banner-mobile d-block d-md-none">
        <img class="w-100" v-lazy="'{{asset('img/eps/styropor_ploce.jpg')}}'" alt="civic">
        <p>{{__('general.thermopor_homepage_line_2')}}</p>
    </div>

    <div class="paragraph-banner d-none d-md-block">
        <img class="w-100" v-lazy="'{{asset('img/eps/styropor_ploce_low.jpg')}}'" alt="civic">
        <p>{{__('general.thermopor_homepage_line_2')}}</p>
    </div>

    <img class="w-100" v-lazy="'{{asset('/img/eps/wall-profilepsd.jpg')}}'" alt="civic">
</div>
@endsection