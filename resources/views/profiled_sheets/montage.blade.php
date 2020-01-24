@extends('layout.main')

@section('content')
<product inline-template>
    <div class="row product_page">
        <div class="col-lg-4 order-2 order-lg-1">
            @include('profiled_sheets/sidebar')
        </div>

        <div class="col-lg-8 order-1 order-lg-2">
            <h1>{{__('general.montage')}}</h1>
            <br>
            <div class="row steps">
                <div class="col-12">
                    <div class="step">
                        <img src="{{asset('img/profilisani_limovi/montage/step1.png')}}" alt="montage step 1" width="100%">
                        <h5>{{__('general.step')}} 1</h5>
                        {{__('general.montage_step_1')}}
                    </div>
                </div>
            </div>
            <div class="row steps">
                <div class="col-12">
                    <div class="step">
                        <img src="{{asset('img/profilisani_limovi/montage/step2.png')}}" alt="montage step 2" width="100%">
                        <h5>{{__('general.step')}} 2</h5>
                        {{__('general.montage_step_2')}}
                    </div>
                </div>
            </div>
            <div class="row steps">
                <div class="col-12">
                    <div class="step">
                        <img src="{{asset('img/profilisani_limovi/montage/step3.png')}}" alt="montage step 3" width="100%">
                        <h5>{{__('general.step')}} 3</h5>
                        {{__('general.montage_step_3')}}
                    </div>
                </div>
            </div>
            <div class="row steps">
                <div class="col-12">
                    <div class="step">
                        <img src="{{asset('img/profilisani_limovi/montage/step4.png')}}" alt="montage step 4" width="100%">
                        <h5>{{__('general.step')}} 4</h5>
                        {{__('general.montage_step_4')}}
                    </div>
                </div>
            </div>
            <div class="row steps">
                <div class="col-12">
                    <div class="step">
                        <img src="{{asset('img/profilisani_limovi/montage/step5.png')}}" alt="montage step 5" width="100%">
                        <h5>{{__('general.step')}} 5</h5>
                        {!!__('general.montage_step_5')!!}
                    </div>
                </div>
            </div>
            <div class="row steps">
                <div class="col-12">
                    <div class="step">
                        <img src="{{asset('img/profilisani_limovi/montage/step6.png')}}" alt="montage step 6" width="100%">
                        <h5>{{__('general.step')}} 6</h5>
                        {{__('general.montage_step_6')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</product>
@endsection