@extends('layout.main')

@section('content')
<product inline-template>
    <div class="row product_page">
        <div class="col-lg-4 order-2 order-lg-1">
            @include('profiled_sheets/sidebar')
        </div>

        <div class="col-lg-8 order-1 order-lg-2">
            <h1>{{__('general.facade_panel')}} - <span>{{__('general.dampa')}}</span></h1>
            <br>
            <div class="cover-img">
                <img src="{{asset('img/profilisani_limovi/dampa/cover.png')}}" alt="civic group">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>{{__('general.dampa_subtitle')}}</h2>
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
                <div class="col-lg-6">
                    <img class="diagram-img mb-4" src="{{asset('img/profilisani_limovi/dampa/dampa_transparent_profile.png')}}" alt="dampa diagram" style="width: 100%">
                </div>
                <div class="col-lg-6">
                    <table class="table table-sm table-striped table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">{{__('general.name')}}</th>
                                <td>{{__('general.dampa')}}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.standard_widths')}}</th>
                                <td>123 mm, 167 mm, 227,5 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.possible_widths')}}</th>
                                <td>{{__('general.from')}} 123 mm {{__('general.to')}} 320 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.length')}}</th>
                                <td>{{__('general.to')}} 8 m</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.thickness')}}</th>
                                <td>{{__('general.from')}} 0,50 mm {{__('general.to')}} 0,60 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.protection')}}</th>
                                <td>Zink 140 ym, Boja 25 ym</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.color')}}</th>
                                <td>RAL: 3009, 5010, 6028, 7016, 8019, 9002, 9005, 9006</td>
                            </tr>
                        </tbody>
                    </table>
                </div>                
            </div>
            <br>
            <div class="row">
                <div class="col-12 text-center gallery">
                    <img @click="index = 0" class="diagram-img" src="{{asset('img/profilisani_limovi/dampa/diagram.png')}}" alt="dampa diagram">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <p>{{__('general.dampa_description')}}</p>
                </div>
            </div>
            <br>
            <div class="row gallery">
                <div class="col-md-6">
                    <div class="bg-img" @click="index = 1" style="background-image:url('{{asset('img/profilisani_limovi/dampa/example1.png')}}')"></div>
                </div>
                <div class="col-md-6">
                    <div class="bg-img" @click="index = 2" style="background-image:url('{{asset('img/profilisani_limovi/dampa/example3.png')}}')"></div>
                </div>
                <div class="col-12">
                    <div class="bg-img" @click="index = 3" style="background-image:url('{{asset('img/profilisani_limovi/dampa/example2.png')}}')"></div>
                </div>
            </div>
            <br>
        </div>
        <gallery :images="[
                '{{asset('img/profilisani_limovi/dampa/diagram.png')}}',
                '{{asset('img/profilisani_limovi/dampa/example1.png')}}',
                '{{asset('img/profilisani_limovi/dampa/example3.png')}}',
                '{{asset('img/profilisani_limovi/dampa/example2.png')}}'
            ]" 
            :index="index" 
            @close="index = null"
        ></gallery>
    </div>
</product>
@endsection