@extends('layout.main')

@section('content')
<product inline-template>
    <div class="row product_page">
        <div class="col-lg-4 order-2 order-lg-1">
            @include('profiled_sheets/sidebar')
        </div>

        <div class="col-lg-8 order-1 order-lg-2">
            <h1>{{__('general.trapezoidal_sheet')}} - <span>{{__('general.trend')}}</span></h1>
            <br>
            <div class="cover-img">
                <img src="{{asset('img/profilisani_limovi/tr40/cover.png')}}" alt="civic group">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>{{__('general.trend_subtitle')}}</h2>
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
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('img/profilisani_limovi/tr40/RAL3009.png')}}" class="d-block w-100" alt="tr40 ral3009">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/profilisani_limovi/tr40/RAL5010.png')}}" class="d-block w-100" alt="tr40 ral5010">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/profilisani_limovi/tr40/RAL6028.png')}}" class="d-block w-100" alt="tr40 ral6028">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/profilisani_limovi/tr40/RAL7016.png')}}" class="d-block w-100" alt="tr40 ral7016">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/profilisani_limovi/tr40/RAL8019.png')}}" class="d-block w-100" alt="tr40 ral8019">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/profilisani_limovi/tr40/RAL9002.png')}}" class="d-block w-100" alt="tr40 ral9002">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/profilisani_limovi/tr40/RAL9005.png')}}" class="d-block w-100" alt="tr40 ral9005">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/profilisani_limovi/tr40/RAL9006.png')}}" class="d-block w-100" alt="tr40 ral9006">
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                <div class="circle ral3009"></div>
                                <span>RAL 3009</span>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                <div class="circle ral5010"></div>
                                <span>RAL 5010</span>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                <div class="circle ral6028"></div>
                                <span>RAL 6028</span>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3">
                                <div class="circle ral7016"></div>
                                <span>RAL 7016</span>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4">
                                <div class="circle ral8019"></div>
                                <span>RAL 8019</span>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5">
                                <div class="circle ral9002"></div>
                                <span>RAL 9002</span>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="6">
                                <div class="circle ral9005"></div>
                                <span>RAL 9005</span>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="7">
                                <div class="circle ral9006"></div>
                                <span>RAL 9006</span>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6">
                    <table class="table table-sm table-striped table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">{{__('general.name')}}</th>
                                <td>Trend - TR 35-40/200</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.total_surface')}}</th>
                                <td>1080 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.useful_surface')}}</th>
                                <td>1000 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.width_straight_part')}}</th>
                                <td>131 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.waveheight')}}</th>
                                <td>33,5 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.wave_step')}}</th>
                                <td>200 mm</td>
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
                    <img @click="index = 0" class="diagram-img" src="{{asset('img/profilisani_limovi/tr40/diagram.png')}}" alt="tr40 diagram">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <p>{{__('general.trend_description')}}</p>
                </div>
            </div>
            <br>
            <div class="row gallery">
                <div class="col-md-6">
                    <div class="bg-img" @click="index = 1" style="background-image:url('{{asset('img/profilisani_limovi/tr40/example1.png')}}')"></div>
                </div>
                <div class="col-md-6">
                    <div class="bg-img" @click="index = 2" style="background-image:url('{{asset('img/profilisani_limovi/tr40/example2.png')}}')"></div>
            
                </div>
                <div class="col-12">
                    <img @click="index = 3" class="mb-4" src="{{asset('img/profilisani_limovi/tr40/example1.jpg')}}" alt="tr40" style="width: 100%">
                    <div class="bg-img" @click="index = 4" style="background-image:url('{{asset('img/profilisani_limovi/tr40/example5.jpg')}}')"></div>
                </div>
            </div>
            <br>
        </div>
        <gallery :images="[
                '{{asset('img/profilisani_limovi/tr40/diagram.png')}}',
                '{{asset('img/profilisani_limovi/tr40/example1.png')}}',
                '{{asset('img/profilisani_limovi/tr40/example2.png')}}',
                '{{asset('img/profilisani_limovi/tr40/example1.jpg')}}',
                '{{asset('img/profilisani_limovi/tr40/example5.jpg')}}'
            ]" 
            :index="index" 
            @close="index = null"
        ></gallery>
    </div>
</product>
@endsection