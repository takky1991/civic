@extends('layout.main')

@section('content')
<div class="row product_page">
    <div class="col-lg-4 order-2 order-lg-1">
        @include('eps/sidebar')
    </div>

    <div class="facade col-lg-8 order-1 order-lg-2">
        <h1>{{__('general.facade_system')}}</h1>
        <h3>{{__('general.facade_construction')}}</h3>
    
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img/eps/facade/facade_construction.jpg')}}" class="img-fluid" alt="Responsive image" style="float: right">
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/eps/facade/facade_construction_legend.jpg')}}" class="img-fluid" alt="Responsive image" style="float: left">
            </div>
        </div>

        <div class="row">
            <p>{{__('general.facade_description')}}</p>
        </div>
    </div>
</div>
@endsection