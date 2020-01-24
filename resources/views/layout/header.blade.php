<div class="header-top d-none d-md-block">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <a href="https://www.facebook.com/civicbih" target="_blank" class="pr-3"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                <a href="https://www.instagram.com/civic.group/" target="_blank" class="pr-3"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                <a href="#" class="px-3"><i class="fa fa-map-marker" aria-hidden="true"></i> Cazin, BIH</a>
            </div>
      
            <div>
                <a href="tel: +38737539007" class="px-3"><i class="fa fa-phone" aria-hidden="true"></i> +387 (0) 37 539 007</a>
                <a href="mailto:info@civicbih.com" class="pl-3"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@civicbih.com</a>
            </div>
        </div>
    </div>
</div>
      
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{localized_route('home')}}"><img src="{{asset('img/civic200.png')}}" alt="civic group logo"></a>

        <div class="d-inline d-lg-none">
            {{-- <span class="navbar-text flags">
                <a href="{{localized_route(explode('.', request()->route()->getName())[1] , [], 'bs')}}">
                    <img src="{{asset('img/ba.png')}}" alt="bosnia flag" class="mx-1 {{app()->getLocale() == 'bs' ? 'active' : ''}}">
                </a>
                <a href="{{localized_route(explode('.', request()->route()->getName())[1], [], 'en')}}">
                    <img src="{{asset('img/gb.png')}}" alt="gb flag" class="mx-1" {{app()->getLocale() == 'en' ? 'active' : ''}}>
                </a>
            </span> --}}

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse py-3 py-lg-0" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'home' ? 'active' : ''}}">
                    <a class="nav-link" href="{{localized_route('home')}}">{{__('general.home')}} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown hover {{(
                    explode('.', request()->route()->getName())[1] == 'profiled_sheets' ||
                    explode('.', request()->route()->getName())[1] == 'prestige' ||
                    explode('.', request()->route()->getName())[1] == 'elegant' ||
                    explode('.', request()->route()->getName())[1] == 'attractive' ||
                    explode('.', request()->route()->getName())[1] == 'trend' ||
                    explode('.', request()->route()->getName())[1] == 'dampa' ||
                    explode('.', request()->route()->getName())[1] == 'siege_sheets' ||
                    explode('.', request()->route()->getName())[1] == 'montage' ||
                    explode('.', request()->route()->getName())[1] == 'rainwater_system' ||
                    explode('.', request()->route()->getName())[1] == 'horizontal_gutter' ||
                    explode('.', request()->route()->getName())[1] == 'gutter_hooks' ||
                    explode('.', request()->route()->getName())[1] == 'gutter_kettle' ||
                    explode('.', request()->route()->getName())[1] == 'drain_pipes' ||
                    explode('.', request()->route()->getName())[1] == 'pipe_holders' ||
                    explode('.', request()->route()->getName())[1] == 'pipe_elbows' ||
                    explode('.', request()->route()->getName())[1] == 'gutter_closure' ||
                    explode('.', request()->route()->getName())[1] == 'gutter_corner' ||
                    explode('.', request()->route()->getName())[1] == 'other_metal_products' ||
                    explode('.', request()->route()->getName())[1] == 'perforated_mesh' ||
                    explode('.', request()->route()->getName())[1] == 'paneling'
                ) ? 'active' : ''}}">
                    <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">{{__('general.construction_sheet')}}</a>
                    <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0">
                        <!-- Level two dropdown-->
                        <li class="dropdown-submenu hover custom">
                            <a id="dropdownMenu2" href="{{localized_route('profiled_sheets')}}" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">{{__('general.profiled_sheets')}}</a>
                            <div aria-labelledby="dropdownMenu2" class="dropdown-menu border-0">
                                <a class="dropdown-item" href="{{localized_route('prestige')}}">
                                    <img src="{{asset('img/profilisani_limovi/prestige/profile.png')}}" alt="crijep ploca prestige">
                                    <div class="menu-title">
                                        {{__('general.prestige')}} <br>
                                        <span>{{__('general.tile_board')}}</span>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('trend')}}">
                                    <img src="{{asset('img/profilisani_limovi/tr40/RAL3009_transparent_profile.png')}}" alt="trapezni lim trend">
                                    <div class="menu-title">
                                        {{__('general.trend')}} <br>
                                        <span>{{__('general.trapezoidal_sheet')}}</span>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('attractive')}}">
                                    <img src="{{asset('img/profilisani_limovi/tr20/RAL9006_transparent_profile.png')}}" alt="trapezni lim attractive">
                                    <div class="menu-title">
                                        {{__('general.attractive')}} <br>
                                        <span>{{__('general.trapezoidal_sheet')}}</span>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('elegant')}}">
                                    <img src="{{asset('img/profilisani_limovi/tr10/profile.png')}}" alt="trapezni lim elegant">
                                    <div class="menu-title">
                                        {{__('general.elegant')}} <br>
                                        <span>{{__('general.trapezoidal_sheet')}}</span>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('paneling')}}">
                                    <img src="{{asset('img/profilisani_limovi/lamperija/profile.png')}}" alt="lamperija">
                                    <div class="menu-title">
                                        {{__('general.paneling')}}
                                    </div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('dampa')}}">
                                    <img src="{{asset('img/profilisani_limovi/dampa/dampa_transparent_profile.png')}}" alt="dampa">
                                    <div class="menu-title">
                                        {{__('general.dampa')}} <br>
                                        <span>{{__('general.facade_panel')}}</span>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('siege_sheets')}}">
                                    <img src="{{asset('img/profilisani_limovi/opsavni_limovi/vjetar_lajsna/siege_sheets_transparent_profile.png')}}" alt="snjegobrani">
                                    <div class="menu-title">
                                        {{__('general.siege_sheets')}} <br>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('montage')}}">
                                    <img src="{{asset('img/profilisani_limovi/montage/montage_transparent_profile.png')}}" alt="montaza lima">
                                    <div class="menu-title">
                                        {{__('general.montage')}} <br>
                                        <span>{{__('general.process_of_montage')}}</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-submenu hover custom">
                            <a id="dropdownMenu3" href="{{localized_route('rainwater_system')}}" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">{{__('general.rainwater_system')}}</a>
                            <div aria-labelledby="dropdownMenu3" class="dropdown-menu border-0">
                                <a class="dropdown-item" href="{{localized_route('horizontal_gutter')}}">
                                    <img src="{{asset('img/metalna_galanterija/horizontalni_oluk/profile.png')}}" alt="horizontalni oluk">
                                    <div class="menu-title">{{__('general.horizontal_gutter')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('gutter_hooks')}}">
                                    <img src="{{asset('img/metalna_galanterija/kuke_za_oluk/profile1.png')}}" alt="kuke za oluk">
                                    <div class="menu-title">{{__('general.gutter_hooks')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('gutter_kettle')}}">
                                    <img src="{{asset('img/metalna_galanterija/olucni_kotlic/profile.png')}}" alt="olucni kotlic">
                                    <div class="menu-title">{{__('general.gutter_kettle')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('drain_pipes')}}">
                                    <img src="{{asset('img/metalna_galanterija/odvodne_cijevi/profile.png')}}" alt="odvodne cijevi">
                                    <div class="menu-title">{{__('general.drain_pipes')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('pipe_holders')}}">
                                    <img src="{{asset('img/metalna_galanterija/drzaci_za_cijevi/profile.png')}}" alt="drzaci za cijevi">
                                    <div class="menu-title">{{__('general.pipe_holders')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('pipe_elbows')}}">
                                    <img src="{{asset('img/metalna_galanterija/koljena_za_cijevi/profile.png')}}" alt="koljena za cijevi">
                                    <div class="menu-title">{{__('general.pipe_elbows')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('gutter_closure')}}">
                                    <img src="{{asset('img/metalna_galanterija/zatvarac_za_oluke/profile.png')}}" alt="zatvarac za oluke">
                                    <div class="menu-title">{{__('general.gutter_closure')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('gutter_corner')}}">
                                    <img src="{{asset('img/metalna_galanterija/vinklo/profile.png')}}" alt="vinklo">
                                    <div class="menu-title">{{__('general.gutter_corner')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('perforated_mesh')}}">
                                    <img src="{{asset('img/metalna_galanterija/perforirana_mrezica/profile.png')}}" alt="perforirana mrezica">
                                    <div class="menu-title">{{__('general.perforated_mesh')}}</div>
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-submenu hover custom">
                            <a id="dropdownMenu4" href="{{localized_route('snow_stops')}}" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">{{__('general.snow_stops')}}</a>
                            <div aria-labelledby="dropdownMenu4" class="dropdown-menu border-0" style="width: 320px;">
                                <a class="dropdown-item" href="{{localized_route('snow_stops') . '#snow_stops_for_tin_cover'}}">
                                    <img src="{{asset('img/metalna_galanterija/snjegobrani/profile1.png')}}" alt="snjegobrani">
                                    <div class="menu-title">{{__('general.snow_stops_for_tin_cover')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('snow_stops') . '#snow_stops_for_tiles'}}">
                                    <img src="{{asset('img/metalna_galanterija/snjegobrani/profile2.png')}}" alt="snjegobrani">
                                    <div class="menu-title">{{__('general.snow_stops_for_tiles')}}</div>
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-submenu hover custom">
                            <a id="dropdownMenu5" href="{{localized_route('other_metal_products')}}" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">{{__('general.other_metal_products')}}</a>
                            <div aria-labelledby="dropdownMenu5" class="dropdown-menu border-0">
                                <a class="dropdown-item" href="{{localized_route('other_metal_products') . '#riders'}}">
                                    <img src="{{asset('img/metalna_galanterija/ostali_proizvodi/profile5trans.png')}}" alt="ostali proizvodi">
                                    <div class="menu-title">{{__('general.riders')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('other_metal_products') . '#roof_foil'}}">
                                    <img src="{{asset('img/metalna_galanterija/ostali_proizvodi/profile6trans.png')}}" alt="ostali proizvodi">
                                    <div class="menu-title">{{__('general.roof_foil')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('other_metal_products') . '#self_drilling_screws'}}">
                                    <img src="{{asset('img/metalna_galanterija/ostali_proizvodi/profile1trans.png')}}" alt="ostali proizvodi">
                                    <div class="menu-title">{{__('general.self_drilling_screws')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('other_metal_products') . '#roofing_nails'}}">
                                    <img src="{{asset('img/metalna_galanterija/ostali_proizvodi/profile2trans.png')}}" alt="ostali proizvodi">
                                    <div class="menu-title">{{__('general.roofing_nails')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('other_metal_products') . '#adhesives_and_silicones'}}">
                                    <img src="{{asset('img/metalna_galanterija/ostali_proizvodi/profile3trans.png')}}" alt="ostali proizvodi">
                                    <div class="menu-title">{{__('general.adhesives_and_silicones')}}</div>
                                </a>
                                <a class="dropdown-item" href="{{localized_route('other_metal_products') . '#basic_varnishes'}}">
                                    <img src="{{asset('img/metalna_galanterija/ostali_proizvodi/profile4trans.png')}}" alt="ostali proizvodi">
                                    <div class="menu-title">{{__('general.basic_varnishes')}}</div>
                                </a>
                            </div>
                        </li>
                        <!-- End Level two -->
                    </ul>
                </li>
                <li class="nav-item {{(explode('.', request()->route()->getName())[1] == 'termopor') ? 'active' : ''}}">
                    <a class="nav-link" href="{{localized_route('termopor')}}">EPS</a>
                </li>
                <li class="nav-item {{(explode('.', request()->route()->getName())[1] == 'dry_build') ? 'active' : ''}}">
                    <a class="nav-link" href="{{localized_route('dry_build')}}">{{__('general.dry_build')}}</a>
                </li>
                <li class="nav-item {{(explode('.', request()->route()->getName())[1] == 'references') ? 'active' : ''}}">
                    <a class="nav-link" href="{{localized_route('references')}}">{{__('general.references')}}</a>
                </li>
                <li class="nav-item {{(explode('.', request()->route()->getName())[1] == 'contact') ? 'active' : ''}}">
                    <a class="nav-link" href="{{localized_route('contact')}}">{{__('general.contact')}}</a>
                </li>
                <li>
                    <a href="{{localized_route('termopor')}}" class="nav-link d-block d-lg-none"><img src="{{asset('img/termopor_2.png')}}" alt="EPS" style="width: 130px"></a>
                </li>
            </ul>
            {{-- <span class="navbar-text d-none d-lg-inline flags">
                <a href="{{localized_route(explode('.', request()->route()->getName())[1] , [], 'bs')}}">
                    <img src="{{asset('img/ba.png')}}" alt="bosnia flag" class="{{app()->getLocale() == 'bs' ? 'active' : ''}}">
                </a>
                <a href="{{localized_route(explode('.', request()->route()->getName())[1], [], 'en')}}">
                    <img src="{{asset('img/gb.png')}}" alt="gb flag" class="{{app()->getLocale() == 'en' ? 'active' : ''}}">
                </a>
            </span> --}}
        </div>

        <a href="{{localized_route('termopor')}}" class="d-none d-lg-block"><img src="{{asset('img/termopor_2.png')}}" alt="EPS" style="width: 130px"></a>
    </div>
</nav>