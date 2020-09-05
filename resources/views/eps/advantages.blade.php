@extends('layout.main')

@section('content')
<div class="row product_page">
    <div class="col-lg-4 order-2 order-lg-1">
        @include('eps/sidebar')
    </div>

    <div class="col-lg-8 order-1 order-lg-2">
        <div class="container eps">
            <h1>EPS</h1>
            <h3>{{__('general.eps')}}</h3>
            <p>{{__('general.styropor')}}</p> 
            <h4>{{__('general.eps_characteristic')}}</h4>
        </div>

        <div class="row">
            <div class="col-md-6">
                    <div class="row advantage">
                        <h3>
                            <img src="{{asset('img/eps/advantages/money.png')}}" lazy="loaded" style="width: 50px;">
                            {{__('general.eps_advantages_price')}}
                        </h3>
                    </div>
                    <div class="row advantage">
                        <p>{{__('general.eps_advantages_price_description')}}</p>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="column advantage">
                    <h3>
                        <img src="{{asset('img/eps/advantages/drop.png')}}" lazy="loaded" style="width: 50px;">
                        {{__('general.eps_advantages_water')}}
                    </h3>
                </div>
                <div class="column advantage">
                    <p>{{__('general.eps_advantages_water_description')}}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                    <div class="row advantage">
                        <h3>
                            <img src="{{asset('img/eps/advantages/insulation.png')}}" lazy="loaded" style="width: 50px;">
                            {{__('general.eps_advantages_insulation')}}
                        </h3>
                    </div>
                    <div class="row advantage">
                        <p>{{__('general.eps_advantages_insulation_description')}}</p>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="column advantage">
                    <h3>
                        <img src="{{asset('img/eps/advantages/hand.png')}}" lazy="loaded" style="width: 50px;">
                        {{__('general.eps_advantages_secure')}}
                    </h3>
                </div>
                <div class="column advantage">
                    <p>{{__('general.eps_advantages_secure_description')}}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                    <div class="row advantage">
                        <h3>
                            <img src="{{asset('img/eps/advantages/writer.png')}}" lazy="loaded" style="width: 50px;">
                            {{__('general.eps_advantages_lightness')}}
                        </h3>
                    </div>
                    <div class="row advantage">
                        <p>{{__('general.eps_advantages_lightness_description')}}</p>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="column advantage">
                    <h3>
                        <img src="{{asset('img/eps/advantages/constructor.png')}}" lazy="loaded" style="width: 50px;">
                        {{__('general.eps_advantages_install')}}
                    </h3>
                </div>
                <div class="column advantage">
                    <p>{{__('general.eps_advantages_install_description')}}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                    <div class="row advantage">
                        <h3>
                            <img src="{{asset('img/eps/advantages/diamond.png')}}" lazy="loaded" style="width: 50px;">
                            {{__('general.eps_advantages_firmness')}}
                        </h3>
                    </div>
                    <div class="row advantage">
                        <p>{{__('general.eps_advantages_firmness_description')}}</p>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="column advantage">
                    <h3>
                        <img src="{{asset('img/eps/advantages/fire.png')}}" lazy="loaded" style="width: 50px;">
                        {{__('general.eps_advantages_self-extinguishing')}}
                    </h3>
                </div>
                <div class="column advantage">
                    <p>{{__('general.eps_advantages_self-extinguishing_description')}}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                    <div class="row advantage">
                        <h3>
                            <img src="{{asset('img/eps/advantages/link.png')}}" lazy="loaded" style="width: 50px;">
                            {{__('general.eps_advantages_durability')}}
                        </h3>
                    </div>
                    <div class="row advantage">
                        <p>{{__('general.eps_advantages_durability_description')}}</p>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="column advantage">
                    <h3>
                        <img src="{{asset('img/eps/advantages/recycling.png')}}" lazy="loaded" style="width: 50px;">
                        {{__('general.eps_advantages_tenable')}}
                    </h3>
                </div>
                <div class="column advantage">
                    <p>{{__('general.eps_advantages_tenable_description')}}</p>
                </div>
            </div>
        </div>

        <div class="container pearl" style="padding-top: 50px;">
            <h4>{{__('general.eps_advantages_pearl')}}</h4>
        </div>

        <div class="row">
            <div class="col-md-6 pearl">
                <img src="{{asset('img/eps/advantages/granule.jpg')}}" class="img-fluid testing-img" alt="Responsive image" style="width: 400px;">
            </div>
            <div class="col-md-6 graf">
                <img src="{{asset('img/eps/advantages/prosjek_materijala.png')}}" lazy="loaded" style="width:220px">
                <img src="{{asset('img/eps/advantages/debljina_materijala.png')}}" lazy="loaded" style="width: 220px;">
            </div>
        </div>

    

        <div class="row styropor">
            <p>{{__('general.styropor_petroleum')}}</p> 
        </div>

    </div>
</div>
@endsection