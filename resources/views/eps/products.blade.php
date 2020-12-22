@extends('layout.main')

@section('content')
    <div class="container">
        <div class="products">
            <h3>{{__('general.thermopor_products')}}</h3>
            <img src="{{asset('img/eps/application_thermopor.jpg')}}" class="img-fluid" alt="Responsive image"> 
            <h4>{{__('general.thermopor_usage')}}</h4>
        </div>

        <div class="row line1">
            <div class="col-md-4">
                <a href="{{localized_route('eps_f60')}}">
                    <img src="{{asset('img/eps/FE60_F80_70.png')}}" class="img-fluid" alt="Responsive image">
                </a>
                <h4>{{__('general.eps_f60')}}</h4>
                <h5>{{__('general.facade_insulation')}}</h5>
            </div>

            <div class="col-md-4">
                <a href="{{localized_route('eps_70')}}">
                    <img src="{{asset('img/eps/FE60_F80_70.png')}}" class="img-fluid" alt="Responsive image">
                </a>
                <h4>{{__('general.eps_70')}}</h4>
                <h5>{{__('general.attic_insulation')}}</h5>
            </div>

            <div class="col-md-4">
                <a href="{{localized_route('eps_f80')}}">
                    <img src="{{asset('img/eps/FE60_F80_70.png')}}" class="img-fluid" alt="Responsive image">
                </a>
                <h4>{{__('general.eps_f80')}}</h4>
                <h5>{{__('general.facade_insulation')}}</h5>
            </div>
        </div>   
    
        <div class="row line2">
            <div class="col-md-4">
                <a href="{{localized_route('eps_100')}}">
                    <img src="{{asset('img/eps/100_150_200.png')}}" class="img-fluid" alt="Responsive image">
                </a>
                <h4>{{__('general.eps_100')}}</h4>
                <h5>{{__('general.floor_insulation')}}</h5>
            </div>

            <div class="col-md-4">
                <a href="{{localized_route('eps_150')}}">
                    <img src="{{asset('img/eps/100_150_200.png')}}" class="img-fluid" alt="Responsive image">
                </a>    
                <h4>{{__('general.eps_150')}}</h4>
                <h5>{{__('general.high_load_insulation')}}</h5>
            </div>

            <div class="col-md-4">
                <a href="{{localized_route('eps_200')}}">
                    <img src="{{asset('img/eps/100_150_200.png')}}" class="img-fluid" alt="Responsive image">
                </a>
                <h4>{{__('general.eps_200')}}</h4>
                <h5>{{__('general.high_load_insulation')}}</h5>
            </div>
        </div>
    </div>
@endsection