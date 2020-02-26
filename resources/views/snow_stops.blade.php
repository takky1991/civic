@extends('layout.main')

@section('content')
<product inline-template>
    <div class="row product_page">
        <!--
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
-->
        <div class="col-lg-12">
            <div class="accordion accordion-primary" id="accordion2Primary">

				<div class="card card-default">
					<div class="card-header" style="background-color: #ffc905">
						<h4 class="card-title m-0" style="text-align: center;">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryOne" aria-expanded="true" style="font-size: 20px;">
								Snjegobran za limeni pokrov
                            </a>
                        </h4>
					</div>
				    <div id="collapse2PrimaryOne" class="collapse show" style="">
					    <div class="card-body">
						    <h3 id="bat_snow_stop">&#8226; {{__('general.bat_snow_stop')}}</span></h3>
                            <br>
                            <div data-v-7e94e6d4="" class="cover-bg" style="background-image: url(&quot;http://127.0.0.1:8000/img/metalna_galanterija/snjegobrani/cover.jpg&quot;); height: 300px;"></div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 gallery">
                                    <img @click="index = 0" class="diagram-img" src="{{asset('img/metalna_galanterija/snjegobrani/example1.jpg')}}" alt="civic group">
                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <br>
                                    <h2>{!!__('general.bat_snow_stop_subtitle')!!}</h2>
                                </div>
                            </div>
                            <br>
                            <p>{{__('general.bat_snow_stop_description')}}</p>
						</div>
					</div>
                </div>
                
                <div class="card card-default">
					<div class="card-header" style="background-color: #ffc905">
						<h4 class="card-title m-0" style="text-align: center;">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryTwo" aria-expanded="true" style="font-size: 20px;"> 
								Snjegobran za crijep
							</a>
						</h4>
					</div>
                    <div id="collapse2PrimaryTwo" class="collapse show" style="">
                    <div class="card-body">
                        <br>
                        <h3 id="snow_stops_for_tiles">&#8226; {{__('general.dotted_snow_stops')}}</span></h3>
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
                                <h2>{{__('general.dotted_snow_stops_subtitle')}}</h2>
                                <br>
                                <p>{!!__('general.dotted_snow_stops_description')!!}</p>

            <br>

            <div class="accordion accordion-primary" id="accordion">
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                                            Bramac (dugi i kratki)
											</a>
										</h4>
									</div>
									<div id="collapse1One" class="collapse show">
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
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                                            Tondach Continental (dugi i kratki)
											</a>
										</h4>
									</div>
									<div id="collapse1Two" class="collapse" >
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
									</div>
								</div>
								<div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Three">
                                            Tondach Saturn
											</a>
										</h4>
									</div>
									<div id="collapse1Three" class="collapse" >
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
									</div>
								</div>
                                <div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Four">
                                            Tondach Jupiter
											</a>
										</h4>
									</div>
									<div id="collapse1Four" class="collapse" >
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
									</div>
								</div>
                                <div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Five">
                                            Creaton Rapido
											</a>
										</h4>
									</div>
									<div id="collapse1Five" class="collapse" >
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
									</div>
								</div>
                                <div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Six">
                                            Creaton Balance
											</a>
										</h4>
									</div>
									<div id="collapse1Six" class="collapse" >
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
									</div>
								</div>
                                <div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Seven">
                                            Nexe Cezar
											</a>
										</h4>
									</div>
									<div id="collapse1Seven" class="collapse" >
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
									</div>
								</div>
                                <div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Eight">
                                            Nexe Octavijan
											</a>
										</h4>
									</div>
									<div id="collapse1Eight" class="collapse" >
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
									</div>
								</div>
                                <div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Nine">
                                            Biber
											</a>
										</h4>
									</div>
									<div id="collapse1Nine" class="collapse" >
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
									</div>
								</div>
                                <div class="card card-default">
									<div class="card-header">
										<h4 class="card-title m-0">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Ten">
                                            Jungmeier
											</a>
										</h4>
									</div>
									<div id="collapse1Ten" class="collapse" >
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
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
            <!--
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
-->
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