@extends('layout.main')

@section('content')
<div class="row product_page">
    <div class="col-lg-4 order-2 order-lg-1">
        @include('eps/sidebar')
    </div>

    <div class="col-lg-8 order-1 order-lg-2 facade">
        <h1>{{__('general.facade_system')}}</h1>
        <h3>{{__('general.facade_construction')}}</h3>
    
        <div class="row facade-img">
            <div class="col-md-6">
                <img src="{{asset('img/eps/facade/facade_construction.jpg')}}" class="img-fluid facade-img" alt="Responsive image" width="300">
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/eps/facade/facade_construction_legend.jpg')}}" class="img-fluid facade-img" alt="Responsive image" width="300">
            </div>
        </div>

        <div class="row" style="padding-bottom:50px;">
            <p class="facade-desc">{{__('general.facade_description')}}</p>
        </div>
    </div>
</div>
@endsection