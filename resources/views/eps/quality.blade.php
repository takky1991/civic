@extends('layout.main')

@section('content')
<div class="row product_page">
    <div class="col-lg-4 order-2 order-lg-1">
        @include('eps/sidebar')
    </div>

    <div class="col-lg-8 order-1 order-lg-2">
        <!-- Heading lg -->
        <div class="row">
            <div class="col-md-6 d-none d-lg-block" style="padding-right:0px;">
                <h3 class="grey-heading">{{__('general.examination')}}</h3>
            </div>
            <div class="col-md-6 d-none d-lg-block">
            <h3 class="yellow-heading">{{__('general.quality1')}}</h3>
            </div>
        </div>
        <!-- Heading sm -->
        <div class="row">
            <div class="col-md-12 d-md-none" style="text-align:center;">
                <h3 class="grey-heading-sm">{{__('general.examination')}}</h3>
                <h3 class="yellow-heading-sm">{{__('general.quality1')}}</h3>
            </div>
        </div>

        <div class="row">
            <p class="eps-quality">{{__('general.eps_quality')}}</p>
        </div>

        <div class="row" style="padding-bottom: 40px;">
            <div class="col-md-6 lab">
                <img src="{{asset('img/eps/quality/civic_lab.jpg')}}" class="img-fluid" alt="Responsive image"> 
            </div>
            <div class="col-md-6 lab">
                <ul>
                    <li>{{__('general.quality_test1')}}</li>
                    <li>{{__('general.quality_test2')}}</li>
                    <li>{{__('general.quality_test3')}}</li>
                    <li>{{__('general.quality_test4')}}</li>
                </ul>  
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 quality">
                <img src="{{asset('img/eps/quality/fire_tester.jpg')}}" class="img-fluid testing-img" alt="Responsive image">
                <div class="container" style="position: realtiv;">
                    <p>{{__('general.eps_quality')}}</p> 
                </div>
            </div>
            <div class="col-md-6 quality">
                <img src="{{asset('img/eps/quality/dimension_tester.jpg')}}" class="img-fluid testing-img" alt="Responsive image">
                <p>{{__('general.eps_quality')}}</p> 
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 quality">
                <img src="{{asset('img/eps/quality/material_testing.jpg')}}" class="img-fluid testing-img" alt="Responsive image">
                <p>{{__('general.eps_quality')}}</p> 
            </div>
            <div class="col-md-6 quality">
                <img src="{{asset('img/eps/quality/heat_meter.jpg')}}"   >
                <p>{{__('general.eps_quality')}}</p> 
            </div>
        </div>

        <div class="row">
            <div class="col-md-6" style="padding-top: 50px;">
                <h3>
                    <img src="{{asset('img/eps/quality/handshake.png')}}" lazy="loaded" style="width: 50px;">
                    {{__('general.quality_standard')}}
                </h3>
            </div>
            <div class="row standard">
                <p>{{__('general.quality_standard_description')}}</p> 
            </div>
        </div>

        <div class="thermopor-logo">
            <img alt="civic termopor" href="{{localized_route('termopor')}}" src="{{asset('img/thermopor_logo.png')}}" style="width: 300px;">
        </div>

    </div>
</div>
@endsection