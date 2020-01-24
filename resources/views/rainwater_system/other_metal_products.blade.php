@extends('layout.main')

@section('content')
<product inline-template>
    <div class="row product_page">
        <div class="col-12">
            <h1>{{__('general.other_metal_products')}}</h1>
            <br>
            <div class="row">
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
            <div class="row">
                <div class="col-md-6 col-lg-4 gallery mb-5">
                    <h3 id="riders">&#8226; {{__('general.riders')}}</h3>
                    <br>
                    <div class="text-center">
                        <img @click="index = 0" class="diagram-img mb-2 w-75 w-50-m" src="{{asset('img/metalna_galanterija/ostali_proizvodi/profile5.jpg')}}" alt="koljena_za_cijevi">
                    </div>
                    <h2>{{__('general.riders_description')}}</h2>
                </div>
                <div class="col-md-6 col-lg-4 gallery mb-5">
                    <h3 id="roof_foil">&#8226; {{__('general.roof_foil')}}</h3>
                    <br>
                    <div class="text-center">
                        <img @click="index = 1" class="diagram-img mb-2 w-75 w-50-m" src="{{asset('img/metalna_galanterija/ostali_proizvodi/profile6.jpg')}}" alt="koljena_za_cijevi">
                    </div>
                    <h2>{{__('general.roof_foil_description')}}</h2>
                </div>
                <div class="col-md-6 col-lg-4 gallery mb-5">
                    <h3 id="self_drilling_screws">&#8226; {{__('general.self_drilling_screws')}}</h3>
                    <br>
                    <div class="text-center">
                        <img @click="index = 2" class="diagram-img mb-2 w-75 w-50-m" src="{{asset('img/metalna_galanterija/ostali_proizvodi/profile1.jpg')}}" alt="koljena_za_cijevi">
                    </div>
                    <h2>{{__('general.self_drilling_screws_description')}}</h2>
                </div>
                <div class="col-md-6 col-lg-4 gallery mb-5">
                    <h3 id="roofing_nails">&#8226; {{__('general.roofing_nails')}}</h3>
                    <br>
                    <div class="text-center">
                        <img @click="index = 3" class="diagram-img mb-2 w-75 w-50-m" src="{{asset('img/metalna_galanterija/ostali_proizvodi/profile2.jpg')}}" alt="koljena_za_cijevi">
                    </div>
                    <h2>{{__('general.roofing_nails_description')}}</h2>
                </div>
                <div class="col-md-6 col-lg-4 gallery mb-5">
                    <h3 id="adhesives_and_silicones">&#8226; {{__('general.adhesives_and_silicones')}}</h3>
                    <br>
                    <div class="text-center">
                        <img @click="index = 4" class="diagram-img mb-2 w-75 w-50-m" src="{{asset('img/metalna_galanterija/ostali_proizvodi/profile3.jpg')}}" alt="koljena_za_cijevi">
                    </div>
                    <h2>{{__('general.adhesives_and_silicones_description')}}</h2>
                </div>
                <div class="col-md-6 col-lg-4 gallery mb-5">
                    <h3 id="basic_varnishes">&#8226; {{__('general.basic_varnishes')}}</h3>
                    <br>
                    <div class="text-center">
                        <img @click="index = 5" class="diagram-img mb-2 w-75 w-50-m" src="{{asset('img/metalna_galanterija/ostali_proizvodi/profile4.jpg')}}" alt="koljena_za_cijevi">
                    </div>
                    <h2>{{__('general.basic_varnishes_description')}}</h2>
                </div>
            </div>
        </div>
        <gallery :images="[
                '{{asset('img/metalna_galanterija/ostali_proizvodi/profile5.jpg')}}',
                '{{asset('img/metalna_galanterija/ostali_proizvodi/profile6.jpg')}}',
                '{{asset('img/metalna_galanterija/ostali_proizvodi/profile1.jpg')}}',
                '{{asset('img/metalna_galanterija/ostali_proizvodi/profile2.jpg')}}',
                '{{asset('img/metalna_galanterija/ostali_proizvodi/profile3.jpg')}}',
                '{{asset('img/metalna_galanterija/ostali_proizvodi/profile4.jpg')}}'
            ]" 
            :index="index" 
            @close="index = null"
        ></gallery>
    </div>
</product>
@endsection