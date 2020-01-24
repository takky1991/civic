@extends('layout.main')

@section('content')
<product inline-template>
    <div class="row product_page">
        <div class="col-lg-4 order-2 order-lg-1">
            @include('rainwater_system/sidebar')
        </div>

        <div class="col-lg-8 order-1 order-lg-2">
            <h1>{{__('general.gutter_kettle')}}</h1>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <h2>{{__('general.gutter_kettle_subtitle')}}</h2>
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
            <div class="row">
                <div class="col-lg-6 gallery">
                    <div class="bg-img" @click="index = 0" style="background-image:url('{{asset('img/metalna_galanterija/olucni_kotlic/profile1.png')}}'); height: 257px;"></div>
                </div>
                <div class="col-lg-6">
                    <table class="table table-sm table-striped table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">{{__('general.name')}}</th>
                                <td>{{__('general.gutter_kettle')}} - Štucna</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.type')}}</th>
                                <td>{{__('general.horizontal_gutter_types')}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.sheet_thickness')}}</th>
                                <td>0,50 - 0,70 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.material')}}</th>
                                <td>{{__('general.gutter_kettle_materials')}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.protection')}}</th>
                                <td>{!!__('general.gutter_kettle_protection')!!}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.color')}}</th>
                                <td>RAL: 3009, 5010, 6028, 7016, 8019, 9002, 9005, 9006</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row gallery">
                <div class="col-md-6">
                    <img class="diagram-img" @click="index = 1" src="{{asset('img/metalna_galanterija/olucni_kotlic/example1.png')}}" style="height: 440px;" alt="civic group">
                </div>
                <div class="col-md-6">
                    <img class="diagram-img mb-3" @click="index = 2" src="{{asset('img/metalna_galanterija/olucni_kotlic/example2.png')}}" alt="civic group">
                    <img class="diagram-img" @click="index = 3" src="{{asset('img/metalna_galanterija/olucni_kotlic/example3.png')}}" alt="civic group">
                </div>
            </div>

        </div>
        <gallery :images="[
                '{{asset('img/metalna_galanterija/olucni_kotlic/profile1.png')}}',
                '{{asset('img/metalna_galanterija/olucni_kotlic/example1.png')}}',
                '{{asset('img/metalna_galanterija/olucni_kotlic/example2.png')}}',
                '{{asset('img/metalna_galanterija/olucni_kotlic/example3.png')}}'
            ]" 
            :index="index" 
            @close="index = null"
        ></gallery>
    </div>
</product>
@endsection