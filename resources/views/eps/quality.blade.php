@extends('layout.main')

@section('content')
<div class="row product_page">
    <div class="col-lg-4 order-2 order-lg-1">
        @include('eps/sidebar')
    </div>

    <div class="col-lg-8 order-1 order-lg-2">
        <div class="quality">
            <h1>{{__('general.quality')}}</h1>
            <p>{{__('general.eps_quality')}}</p>
            <img src="{{asset('img/eps/quality/civic_lab.jpg')}}" class="img-fluid" alt="Responsive image"> 
            <hr style="border-top: 2px solid rgb(250 200 36);">
         
            <div class="row testing">
                <div class="col-md-6">
                    <img src="{{asset('img/eps/quality/fire_tester.jpg')}}" class="img-fluid" alt="Responsive image" style="width: 200px">
                    <h3>{{__('general.quality_test4')}}</h3>
                    <p>{{__('general.quality_test4_desc')}}</p> 
                </div>
                <div class="col-md-6">
                    <img src="{{asset('img/eps/quality/dimension_tester.jpg')}}" class="img-fluid" alt="Responsive image" style="width: 180px">
                    <h3>{{__('general.quality_test1')}}</h3>
                    <p style="padding-bottom: 64px;">{{__('general.quality_test1_desc')}}</p> 
                </div>
                <div class="col-md-6">
                    <img src="{{asset('img/eps/quality/material_testing.jpg')}}" class="img-fluid" alt="Responsive image" style="width: 180px">
                    <h3>{{__('general.quality_test2')}}</h3>
                    <p>{{__('general.quality_test2_desc')}}</p> 
                </div>
                <div class="col-md-6">
                    <img src="{{asset('img/eps/quality/heat_meter.jpg')}}" class="img-fluid" alt="Responsive image" style="width: 161px">
                    <h3>{{__('general.quality_test3')}}</h3>
                    <p style="padding-bottom: 45px;">{{__('general.quality_test3_desc')}}</p> 
                </div>
            </div>

            <div class="row standard">
                <div class="col-md-6">
                    <span><img src="{{asset('img/eps/quality/handshake.png')}}" class="img-fluid" alt="Responsive image"></span>
                    <span class="desc">{{__('general.quality_standard')}}</span>
                </div>
                <div class="col-md-6">
                    <p>{{__('general.quality_standard_description')}}</p> 
                </div>
            </div>

        </div>
    </div>
</div>
@endsection