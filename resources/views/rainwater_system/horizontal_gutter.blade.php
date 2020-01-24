@extends('layout.main')

@section('content')
<product inline-template>
    <div class="row product_page">
        <div class="col-lg-4 order-2 order-lg-1">
            @include('rainwater_system/sidebar')
        </div>

        <div class="col-lg-8 order-1 order-lg-2">
            <h1>{{__('general.horizontal_gutter')}}</h1>
            <br>
            <div class="cover-bg" style="background-image:url('{{asset('img/metalna_galanterija/horizontalni_oluk/example1.jpg')}}'); height: 300px;"></div>
            <div class="row">
                <div class="col-md-12">
                    <h2>{{__('general.horizontal_gutter_subtitle')}}</h2>
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
                    <div class="bg-img" @click="index = 0" style="background-image:url('{{asset('img/metalna_galanterija/horizontalni_oluk/profile1.png')}}'); height: 284px;"></div>
                </div>
                <div class="col-lg-6">
                    <table class="table table-sm table-striped table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">{{__('general.name')}}</th>
                                <td>{{__('general.horizontal_gutter')}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.type')}}</th>
                                <td>{{__('general.horizontal_gutter_types')}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.developed_width')}}</th>
                                <td>280 - 330 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.length')}}</th>
                                <td>
                                    {!!__('general.horizontal_gutter_length')!!}
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.sheet_thickness')}}</th>
                                <td>0,50 - 0,70 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.material')}}</th>
                                <td>{{__('general.horizontal_gutter_materials')}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.protection')}}</th>
                                <td>{!!__('general.horizontal_gutter_protection')!!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <p>{{__('general.horizontal_gutter_description')}}</p>
                </div>
            </div>
        </div>
        <gallery :images="[
                '{{asset('img/metalna_galanterija/horizontalni_oluk/profile1.png')}}'
            ]" 
            :index="index" 
            @close="index = null"
        ></gallery>
    </div>
</product>
@endsection