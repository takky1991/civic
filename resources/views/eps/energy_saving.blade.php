@extends('layout.main')

@section('content')
<div class="row product_page">
    <div class="col-lg-4 order-2 order-lg-1">
        @include('eps/sidebar')
    </div>

    <div class="col-lg-8 order-1 order-lg-2">
        <!--Izolacija, najbolja usteda-->
        <div class="energy">
            <h1>{{__('general.energy_saving')}}</h1>
            <div class="row">
                <div class="col-md-5">
                    <img src="{{asset('img/eps/energy/gubitak-energije.jpg')}}" class="img-fluid" alt="Responsive image" width="300">
                </div>
                <div class="col-md-7">
                    <img src="{{asset('img/eps/energy/radiator.jpg')}}" class="img-fluid" alt="Responsive image" width="400">
                </div>
            </div>
        </div>
        <!-- Koeficijent prolaska toplote-->
        <div class="wall">
            <h1>{{__('general.energy_coefficient')}}</h1>
            <div class="row">
                <div class="col-md-6">
                    <h3>{{__('general.wall_without_insulation')}}</h3>
                    <img src="{{asset('img/eps/energy/wall_without_insulation.jpg')}}" class="img-fluid" alt="Responsive image" width="300">
                </div>
                <div class="col-md-6">
                    <h3>{{__('general.wall_with_insulation')}}</h3>
                    <img src="{{asset('img/eps/energy/wall_with_insulation.jpg')}}" class="img-fluid" alt="Responsive image" width="300">
                </div>
            </div>
            <p>{{__('general.wal_insulation_description')}}</p>
        </div>

    </div>
</div> 
@endsection