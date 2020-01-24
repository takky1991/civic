@extends('layout.main')

@section('content')
    <div class="products_index">
        <h1>{{__('general.profiled_sheets')}}</h1>
        <br>
        <h2>{{__('general.profiled_sheets_subtitle')}}</h2>
        <br>

        <hr>
        <br>

        <div class="row">
            <div class="col-md-4">
                <a href="{{localized_route('prestige')}}">
                    <div class="item">
                        <img src="{{asset('img/profilisani_limovi/prestige/profile.png')}}" alt="prestige">
                        <div class="item-title">{{__('general.prestige')}} <br>
                            <span>{{__('general.tile_board')}}</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{localized_route('trend')}}">
                    <div class="item">
                        <img src="{{asset('img/profilisani_limovi/tr40/RAL3009_transparent_profile.png')}}" alt="tr40">
                        <div class="item-title">{{__('general.trend')}} <br>
                            <span>{{__('general.trapezoidal_sheet')}}</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{localized_route('attractive')}}">
                    <div class="item">
                        <img src="{{asset('img/profilisani_limovi/tr20/RAL9006_transparent_profile.png')}}" alt="tr20">
                        <div class="item-title">{{__('general.attractive')}} <br>
                            <span>{{__('general.trapezoidal_sheet')}}</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <a href="{{localized_route('elegant')}}">
                    <div class="item">
                        <img src="{{asset('img/profilisani_limovi/tr10/profile.png')}}" alt="tr10">
                        <div class="item-title">{{__('general.elegant')}} <br>
                            <span>{{__('general.trapezoidal_sheet')}}</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{localized_route('paneling')}}">
                    <div class="item">
                        <img src="{{asset('img/profilisani_limovi/lamperija/profile.png')}}" alt="tr10">
                        <div class="item-title">{{__('general.paneling')}}
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{localized_route('dampa')}}">
                    <div class="item">
                        <img src="{{asset('img/profilisani_limovi/dampa/dampa_transparent_profile.png')}}" alt="dampa">
                        <div class="item-title">{{__('general.dampa')}} <br>
                            <span>{{__('general.facade_panel')}}</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <a href="{{localized_route('siege_sheets')}}">
                    <div class="item">
                        <img src="{{asset('img/profilisani_limovi/opsavni_limovi/vjetar_lajsna/siege_sheets_transparent_profile.png')}}" alt="siege sheets">
                        <div class="item-title">{{__('general.siege_sheets')}}</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{localized_route('montage')}}">
                    <div class="item">
                        <img src="{{asset('img/profilisani_limovi/montage/montage_transparent_profile.png')}}" alt="montage">
                        <div class="item-title">{{__('general.montage')}} <br>
                            <span>{{__('general.process_of_montage')}}</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection