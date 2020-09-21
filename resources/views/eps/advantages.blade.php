@extends('layout.main')

@section('content')
<div class="row product_page">
    <div class="col-lg-4 order-2 order-lg-1">
        @include('eps/sidebar')
    </div>

    <div class="advantages col-lg-8 order-1 order-lg-2">
        <div class="container">
            <h1>EPS</h1>
            <h3>{{__('general.eps')}}</h3>
            <p>{{__('general.styropor')}}</p> 
            <h4>{{__('general.eps_characteristic')}}</h4>
        </div>

        <div class="points row">
            <div class="col-md-6">
                <div class="row">
                    <span><img src="{{asset('img/eps/advantages/money.png')}}" class="img-fluid testing-img" alt="Responsive image"></span>
                    <span class="advantage">{{__('general.eps_advantages_price')}}</span>          
                </div>
                <div class="row">
                    <p>{{__('general.eps_advantages_price_description')}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <span><img src="{{asset('img/eps/advantages/drop.png')}}" class="img-fluid testing-img" alt="Responsive image"></span>
                    <span class="advantage">{{__('general.eps_advantages_water')}}</span>     
                </div>
                <div class="row">
                    <p>{{__('general.eps_advantages_water_description')}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <span><img src="{{asset('img/eps/advantages/insulation.png')}}" class="img-fluid testing-img" alt="Responsive image"></span>
                    <span class="advantage">{{__('general.eps_advantages_insulation')}}</span>     
                </div>
                <div class="row">
                    <p>{{__('general.eps_advantages_insulation_description')}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <span><img src="{{asset('img/eps/advantages/hand.png')}}" class="img-fluid testing-img" alt="Responsive image"></span>
                    <span class="advantage">{{__('general.eps_advantages_secure')}}</span> 
                </div>
                <div class="row">
                    <p>{{__('general.eps_advantages_secure_description')}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <span><img src="{{asset('img/eps/advantages/writer.png')}}" class="img-fluid testing-img" alt="Responsive image"></span>
                    <span class="advantage">{{__('general.eps_advantages_lightness')}}</span> 
                </div>
                <div class="row">
                    <p>{{__('general.eps_advantages_lightness_description')}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <span><img src="{{asset('img/eps/advantages/constructor.png')}}" class="img-fluid testing-img" alt="Responsive image"></span>
                    <span class="advantage">{{__('general.eps_advantages_install')}}</span> 
                </div>
                <div class="row">
                    <p>{{__('general.eps_advantages_install_description')}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <span><img src="{{asset('img/eps/advantages/diamond.png')}}" class="img-fluid testing-img" alt="Responsive image"></span>
                    <span class="advantage">{{__('general.eps_advantages_firmness')}}</span> 
                </div>
                <div class="row">
                    <p>{{__('general.eps_advantages_firmness_description')}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <span><img src="{{asset('img/eps/advantages/fire.png')}}" class="img-fluid testing-img" alt="Responsive image"></span>
                    <span class="advantage">{{__('general.eps_advantages_self-extinguishing')}}</span> 
                </div>
                <div class="row">
                    <p>{{__('general.eps_advantages_self-extinguishing_description')}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <span><img src="{{asset('img/eps/advantages/link.png')}}" class="img-fluid testing-img" alt="Responsive image"></span>
                    <span class="advantage">{{__('general.eps_advantages_durability')}}</span> 
                </div>
                <div class="row">
                    <p>{{__('general.eps_advantages_durability_description')}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <span><img src="{{asset('img/eps/advantages/recycling.png')}}" class="img-fluid testing-img" alt="Responsive image"></span>
                    <span class="advantage">{{__('general.eps_advantages_tenable')}}</span> 
                </div>
                <div class="row">
                    <p>{{__('general.eps_advantages_tenable_description')}}</p>
                </div>
            </div>
        </div>

        <div class="row pearl">
            <h4>{{__('general.eps_advantages_pearl')}}</h4>
            
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('img/eps/advantages/granule.jpg')}}" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-6 graf">
                    <img src="{{asset('img/eps/advantages/prosjek_materijala.png')}}" lazy="loaded">
                    <img src="{{asset('img/eps/advantages/debljina_materijala.png')}}" lazy="loaded">
                </div>
            </div>

            <div class="row">
                <p>{{__('general.styropor_petroleum')}}</p> 
            </div>
        </div>

    </div>
</div>
@endsection