@extends('layout.main')

@section('content')
<product inline-template>
    <div class="row product_page">
        <div class="col-lg-4 order-2 order-lg-1">
            @include('rainwater_system/sidebar')
        </div>

        <div class="col-lg-8 order-1 order-lg-2">
            <h1>{{__('general.gutter_corner')}} <br> <span style="text-transform:lowercase">({{__('general.external_and_internal')}})</span></h1>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <h2>{{__('general.gutter_corner_subtitle')}}</h2>
                </div>

                <div class="col-md-12 text-right">
                    <label class="weather-title">{{__('general.resistant_to_all_conditions')}}:</label>
                    <div class="weather">
                        <img src="{{asset('img/sun.png')}}" alt="sun" title="{{__('general.sun')}}">
                        <img src="{{asset('img/rain.png')}}" alt="rain" title="{{__('general.rain')}}">
                        <img src="{{asset('img/snow.png')}}" alt="snow" title="{{__('general.snow')}}">
                        <img src="{{asset('img/wind.png')}}" alt="wind" title="{{__('general.wind')}}">
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <div class="row gallery">
                <div class="col-12 text-center">
                    <img class="diagram-img mb-4" @click="index = 0" src="{{asset('img/metalna_galanterija/vinklo/profile1.png')}}" alt="vinklo">
                </div>
                <div class="col-lg-6">
                    <img class="diagram-img" @click="index = 1" src="{{asset('img/metalna_galanterija/vinklo/example3.png')}}" alt="vinklo">
                </div>
                <div class="col-lg-6">
                    <img class="diagram-img" @click="index = 2" src="{{asset('img/metalna_galanterija/vinklo/example2.png')}}" alt="vinklo">
                </div>
            </div>
        </div>
        <gallery :images="[
                '{{asset('img/metalna_galanterija/vinklo/profile1.png')}}',
                '{{asset('img/metalna_galanterija/vinklo/example3.png')}}',
                '{{asset('img/metalna_galanterija/vinklo/example2.png')}}'
            ]" 
            :index="index" 
            @close="index = null"
        ></gallery>
    </div>
</product>
@endsection