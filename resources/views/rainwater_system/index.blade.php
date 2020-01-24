@extends('layout.main')

@section('content')
    <div class="products_index">
        <h1>{{__('general.rainwater_system')}}</h1>

        <hr>
        <br>

        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img/metalna_galanterija/oluk.png')}}" alt="sistem oborinskih voda" style="width: 100%">
            </div>
            <div class="col-md-6">
                <h2>{{__('general.rainwater_system_description')}}</h2>
            </div>
        </div>

        <hr>
        <br>

        <div class="row">
            <div class="col-md-4">
                <a href="{{localized_route('horizontal_gutter')}}">
                    <div class="item">
                        <img src="{{asset('img/metalna_galanterija/horizontalni_oluk/profile.png')}}" alt="horizontalni oluk">
                        <div class="item-title">{{__('general.horizontal_gutter')}}</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{localized_route('gutter_hooks')}}">
                    <div class="item">
                        <img src="{{asset('img/metalna_galanterija/kuke_za_oluk/profile1.png')}}" alt="kuka za oluk">
                        <div class="item-title">{{__('general.gutter_hooks')}}</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{localized_route('gutter_kettle')}}">
                    <div class="item">
                        <img src="{{asset('img/metalna_galanterija/olucni_kotlic/profile.png')}}" alt="olucni kotlic">
                        <div class="item-title">{{__('general.gutter_kettle')}}</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <a href="{{localized_route('drain_pipes')}}">
                    <div class="item">
                        <img src="{{asset('img/metalna_galanterija/odvodne_cijevi/profile.png')}}" alt="odvodne cijevi">
                        <div class="item-title">{{__('general.drain_pipes')}}</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{localized_route('pipe_holders')}}">
                    <div class="item">
                        <img src="{{asset('img/metalna_galanterija/drzaci_za_cijevi/profile.png')}}" alt="drzaci za cijevi">
                        <div class="item-title">{{__('general.pipe_holders')}}</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{localized_route('pipe_elbows')}}">
                    <div class="item">
                        <img src="{{asset('img/metalna_galanterija/koljena_za_cijevi/profile.png')}}" alt="koljena za cijevi">
                        <div class="item-title">{{__('general.pipe_elbows')}}</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <a href="{{localized_route('gutter_closure')}}">
                    <div class="item">
                        <img src="{{asset('img/metalna_galanterija/zatvarac_za_oluke/profile.png')}}" alt="zatvarac za oluke">
                        <div class="item-title">{{__('general.gutter_closure')}}</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{localized_route('gutter_corner')}}">
                    <div class="item">
                        <img src="{{asset('img/metalna_galanterija/vinklo/profile.png')}}" alt="vinklo">
                        <div class="item-title">{{__('general.gutter_corner')}}</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{localized_route('perforated_mesh')}}">
                    <div class="item">
                        <img src="{{asset('img/metalna_galanterija/perforirana_mrezica/profile.png')}}" alt="perforirana mrezica">
                        <div class="item-title">{{__('general.perforated_mesh')}}</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection