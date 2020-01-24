@extends('layout.main')

@section('content')
<product inline-template>
    <div class="row product_page">
        <div class="col-lg-4 order-2 order-lg-1">
            @include('profiled_sheets/sidebar')
        </div>

        <div class="col-lg-8 order-1 order-lg-2">
            <h1>{{__('general.siege_sheets')}}</span></h1>
            <br>
            <div class="cover-bg" style="background-image:url('{{asset('img/profilisani_limovi/opsavni_limovi/cover.png')}}'); height: 300px;"></div>
            <div class="row">
                <div class="col-md-12">
                    <h2>{{__('general.siege_sheets_subtitle')}}</h2>
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
                <div class="col-12">
                    <p>{{__('general.siege_sheets_description')}}</p>
                </div>
            </div>
            <br>


            <h3>&#8226; {{__('general.wind_moldings')}}</span></h3>
            <br>
            <h2>{{__('general.wind_moldings_description')}}</h2>
            <br>
            <div class="gallery text-center">
                <img @click="index = 0" class="diagram-img" src="{{asset('img/profilisani_limovi/opsavni_limovi/vjetar_lajsna/diagram.png')}}" alt="vjetar_lajsna diagram">
            </div>
            <br>
            <div class="row gallery">
                <div class="col-md-6">
                    <div class="bg-img" @click="index = 1" style="background-image:url('{{asset('img/profilisani_limovi/opsavni_limovi/vjetar_lajsna/example1.png')}}')"></div>
                </div>
                <div class="col-md-6">
                    <div class="bg-img" @click="index = 2" style="background-image:url('{{asset('img/profilisani_limovi/opsavni_limovi/vjetar_lajsna/example2.png')}}')"></div>
                </div>
            </div>


            <br>
            <br>


            <div class="row">
                <div class="col-md-6">
                    <h3>&#8226; {{__('general.introductory_sheet')}}</span></h3>
                    <br>
                    <h2 style="height:150px">{{__('general.introductory_sheet_description')}}</h2>
                    <br>
                    <div class="gallery text-center">
                        <img @click="index = 3" style="height:300px" class="diagram-img" src="{{asset('img/profilisani_limovi/opsavni_limovi/uvodni_lim/diagram.png')}}" alt="uvodni_lim diagram">
                    </div>
                    <br>
                    <div class="row gallery text-center">
                        <div class="col-12">
                            <div class="bg-img" @click="index = 4" style="background-image:url('{{asset('img/profilisani_limovi/opsavni_limovi/uvodni_lim/example1.png')}}')"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h3> &#8226; {{__('general.bay_sheet')}}</span></h3>
                    <br>
                    <h2 style="height:150px">{{__('general.bay_sheet_description')}}</h2>
                    <br>
                    <div class="gallery text-center">
                        <img @click="index = 5" class="diagram-img" src="{{asset('img/profilisani_limovi/opsavni_limovi/uvalni_lim/diagram.png')}}" alt="uvalni_lim diagram">
                    </div>
                    <br>
                    <div class="row gallery text-center">
                        <div class="col-12">
                            <div class="bg-img" @click="index = 6" style="background-image:url('{{asset('img/profilisani_limovi/opsavni_limovi/uvalni_lim/example1.png')}}')"></div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <h3>&#8226; {{__('general.kaplama')}}</span></h3>
            <br>
            <h2>{{__('general.kaplama_subtitle')}}</h2>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="gallery">
                        <img @click="index = 7" class="diagram-img" src="{{asset('img/profilisani_limovi/opsavni_limovi/kaplama/profile1.png')}}" alt="vjetar_lajsna diagram" style="height: 207px;">
                    </div>
                </div>
                <div class="col-md-6">
                    <table class="table table-sm table-striped table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">{{__('general.name')}}</th>
                                <td>Kaplama</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.developed_width')}}</th>
                                <td>312 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.useful_width')}}</th>
                                <td>250 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.length')}}</th>
                                <td>2210 mm</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('general.useful_length')}}</th>
                                <td>2140 mm</td>
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
            <p>{{__('general.kaplama_description')}}</p>
            <br>
            <div class="row gallery">
                <div class="col-md-6">
                    <div class="bg-img" @click="index = 8" style="background-image:url('{{asset('img/profilisani_limovi/opsavni_limovi/kaplama/diagram.png')}}'); height: 350px;"></div>
                </div>
                <div class="col-md-6">
                    <div class="bg-img" @click="index = 9" style="background-image:url('{{asset('img/profilisani_limovi/opsavni_limovi/kaplama/example1.png')}}'); height: 350px;"></div>
                </div>
            </div>
        </div>
        <gallery :images="[
                '{{asset('img/profilisani_limovi/opsavni_limovi/vjetar_lajsna/diagram.png')}}',
                '{{asset('img/profilisani_limovi/opsavni_limovi/vjetar_lajsna/example1.png')}}',
                '{{asset('img/profilisani_limovi/opsavni_limovi/vjetar_lajsna/example2.png')}}',

                '{{asset('img/profilisani_limovi/opsavni_limovi/uvodni_lim/diagram.png')}}',
                '{{asset('img/profilisani_limovi/opsavni_limovi/uvodni_lim/example1.png')}}',
                '{{asset('img/profilisani_limovi/opsavni_limovi/uvalni_lim/diagram.png')}}',
                '{{asset('img/profilisani_limovi/opsavni_limovi/uvalni_lim/example1.png')}}',

                '{{asset('img/profilisani_limovi/opsavni_limovi/kaplama/profile1.png')}}',
                '{{asset('img/profilisani_limovi/opsavni_limovi/kaplama/diagram.png')}}',
                '{{asset('img/profilisani_limovi/opsavni_limovi/kaplama/example1.png')}}'
            ]" 
            :index="index" 
            @close="index = null"
        ></gallery>
    </div>
</product>
@endsection