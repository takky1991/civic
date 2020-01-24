@extends('layout.main')

@section('content')
<product inline-template>
    <div class="row product_page">
        <div class="col-lg-4 mb-5">
            <div class="sidebar">
                <div class="sidebar-header">
                    {{__('general.snow_stops_for_tin_cover')}}
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{localized_route('snow_stops') . '#bat_snow_stop'}}">{{__('general.bat_snow_stop')}}</a>
                    </li>
                </ul>

                <br>

                <div class="sidebar-header">
                    {{__('general.snow_stops_for_tiles')}}
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{localized_route('snow_stops') . '#bramac_short_long'}}">{{__('general.bramac_short_long')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{localized_route('snow_stops') . '#tondach_continental_short_long'}}">{{__('general.tondach_continental_short_long')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{localized_route('snow_stops') . '#tondach_saturn'}}">Tondach Saturn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{localized_route('snow_stops') . '#tondach_jupiter'}}">Tondach Jupiter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{localized_route('snow_stops') . '#creaton_rapido'}}">Creaton Rapido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{localized_route('snow_stops') . '#creaton_balance'}}">Creaton Balance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{localized_route('snow_stops') . '#nexe_cezar'}}">Nexe Cezar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{localized_route('snow_stops') . '#nexe_octavijan'}}">Nexe Octavijan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{localized_route('snow_stops') . '#biber'}}">Biber</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{localized_route('snow_stops') . '#jungmeier'}}">Jungmeier</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-8">
            <h1 id="snow_stops_for_tin_cover">{{__('general.snow_stops_for_tin_cover')}}</span></h1>
            <br>
            <div class="cover-bg" style="background-image:url('{{asset('img/metalna_galanterija/snjegobrani/cover.jpg')}}'); height: 300px;"></div>
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

            <h3 id="bat_snow_stop">&#8226; {{__('general.bat_snow_stop')}}</span></h3>
            <br>
            <div class="row">
                <div class="col-md-6 gallery">
                    <img @click="index = 0" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/example1.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-6">
                    <h2>{!!__('general.bat_snow_stop_subtitle')!!}</h2>
                </div>
            </div>
            <br>
            <p>{{__('general.bat_snow_stop_description')}}</p>


            <br>
            <br>


            <h1 id="snow_stops_for_tiles">{{__('general.snow_stops_for_tiles')}}</span></h1>
            <br>
            <div class="cover-bg" style="background-image:url('{{asset('img/metalna_galanterija/snjegobrani/cover2.jpg')}}'); height: 300px;"></div>
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

            <h3>&#8226; {{__('general.dotted_snow_stops')}}</span></h3>
            <br>
            <h2>{{__('general.dotted_snow_stops_subtitle')}}</h2>
            <br>
            <p>{!!__('general.dotted_snow_stops_description')!!}</p>

            <br>
            <br>
            <br>

            <h3 id="bramac_short_long">&#8226; {{__('general.bramac_short_long')}}</span></h3>
            <br>
            <div class="row gallery">
                <div class="col-md-3">
                    <img @click="index = 1" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/bramac1.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 2" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/bramac2.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 3" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/bramac3.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 4" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/bramac4.jpg')}}" alt="civic group">
                </div>
            </div>

            <br>
            <br>
            <br>

            <h3 id="tondach_continental_short_long">&#8226; {{__('general.tondach_continental_short_long')}}</span></h3>
            <br>
            <div class="row gallery">
                <div class="col-md-3">
                    <img @click="index = 5" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/tondach_continental1.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 6" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/tondach_continental2.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 7" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/tondach_continental3.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 8" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/tondach_continental4.jpg')}}" alt="civic group">
                </div>
            </div>

            <br>
            <br>
            <br>

            <h3 id="tondach_saturn">&#8226; Tondach Saturn</span></h3>
            <br>
            <div class="row gallery">
                <div class="col-md-3">
                    <img @click="index = 9" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/tondach_saturn1.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 10" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/tondach_saturn2.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 11" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/tondach_saturn3.jpg')}}" alt="civic group">
                </div>
            </div>

            <br>
            <br>
            <br>

            <h3 id="tondach_jupiter">&#8226; Tondach Jupiter</span></h3>
            <br>
            <div class="row gallery">
                <div class="col-md-3">
                    <img @click="index = 12" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/tondach_jupiter1.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 13" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/tondach_jupiter2.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 14" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/tondach_jupiter3.jpg')}}" alt="civic group">
                </div>
            </div>

            <br>
            <br>
            <br>

            <h3 id="creaton_rapido">&#8226; Creaton Rapido</span></h3>
            <br>
            <div class="row gallery">
                <div class="col-md-3">
                    <img @click="index = 15" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/creaton_rapido1.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 16" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/creaton_rapido2.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 17" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/creaton_rapido3.jpg')}}" alt="civic group">
                </div>
            </div>

            <br>
            <br>
            <br>

            <h3 id="creaton_balance">&#8226; Creaton Balance</span></h3>
            <br>
            <div class="row gallery">
                <div class="col-md-3">
                    <img @click="index = 18" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/creaton_balance1.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 19" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/creaton_balance2.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 20" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/creaton_balance3.jpg')}}" alt="civic group">
                </div>
            </div>

            <br>
            <br>
            <br>

            <h3 id="nexe_cezar">&#8226; Nexe Cezar</span></h3>
            <br>
            <div class="row gallery">
                <div class="col-md-3">
                    <img @click="index = 21" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/nexe_cezar1.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 22" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/nexe_cezar2.jpg')}}" alt="civic group"> 
                </div>
                <div class="col-md-3">
                    <img @click="index = 23" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/nexe_cezar3.jpg')}}" alt="civic group">
                </div>
            </div>

            <br>
            <br>
            <br>

            <h3 id="nexe_octavijan">&#8226; Nexe Octavijan</span></h3>
            <br>
            <div class="row gallery">
                <div class="col-md-3">
                    <img @click="index = 24" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/nexe_oktavijan1.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 25" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/nexe_oktavijan2.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 26" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/nexe_oktavijan3.jpg')}}" alt="civic group">
                </div>
            </div>

            <br>
            <br>
            <br>

            <h3 id="biber">&#8226; Biber</span></h3>
            <br>
            <div class="row gallery">
                <div class="col-md-3">
                    <img @click="index = 27" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/biber1.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 28" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/biber2.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 29" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/biber3.jpg')}}" alt="civic group">
                </div>
            </div>

            <br>
            <br>
            <br>

            <h3 id="jungmeier">&#8226; Jungmeier</span></h3>
            <br>
            <div class="row gallery">
                <div class="col-md-3">
                    <img @click="index = 30" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/jungmeier1.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 31" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/jungmeier2.jpg')}}" alt="civic group">
                </div>
                <div class="col-md-3">
                    <img @click="index = 32" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/jungmeier3.jpg')}}" alt="civic group">
                </div>
            </div>
        </div>
        <gallery :images="[
                '{{asset('img/metalna_galanterija/snjegobrani/example1.jpg')}}',

                '{{asset('img/metalna_galanterija/snjegobrani/bramac1.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/bramac2.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/bramac3.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/bramac4.jpg')}}',

                '{{asset('img/metalna_galanterija/snjegobrani/tondach_continental1.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/tondach_continental2.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/tondach_continental3.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/tondach_continental4.jpg')}}',

                '{{asset('img/metalna_galanterija/snjegobrani/tondach_saturn1.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/tondach_saturn2.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/tondach_saturn3.jpg')}}',

                '{{asset('img/metalna_galanterija/snjegobrani/tondach_jupiter1.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/tondach_jupiter2.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/tondach_jupiter3.jpg')}}',

                '{{asset('img/metalna_galanterija/snjegobrani/creaton_rapido1.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/creaton_rapido2.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/creaton_rapido3.jpg')}}',

                '{{asset('img/metalna_galanterija/snjegobrani/creaton_balance1.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/creaton_balance2.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/creaton_balance3.jpg')}}',

                '{{asset('img/metalna_galanterija/snjegobrani/nexe_cezar1.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/nexe_cezar2.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/nexe_cezar3.jpg')}}',

                '{{asset('img/metalna_galanterija/snjegobrani/nexe_oktavijan1.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/nexe_oktavijan2.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/nexe_oktavijan3.jpg')}}',

                '{{asset('img/metalna_galanterija/snjegobrani/biber1.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/biber2.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/biber3.jpg')}}',

                '{{asset('img/metalna_galanterija/snjegobrani/jungmeier1.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/jungmeier2.jpg')}}',
                '{{asset('img/metalna_galanterija/snjegobrani/jungmeier3.jpg')}}',
            ]" 
            :index="index" 
            @close="index = null"
        ></gallery>
    </div>
</product>
@endsection