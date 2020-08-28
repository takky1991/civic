@extends('layout.main')

@section('content')
<div class="row product_page">
    <div class="col-lg-4 order-2 order-lg-1">
        @include('eps/sidebar')
    </div>

    <div class="col-lg-8 order-1 order-lg-2">
        <h1>{{__('general.other_products')}}</h1>
    </div>
</div>
@endsection