@extends('layout.main')

@section('content')
<div class="row product_page">
    <div class="col-lg-4 order-2 order-lg-1">
        @include('eps/sidebar')
    </div>
    
    <div class="col-lg-8 order-1 order-lg-2">
        <!-- Heading -->  
        <div class="col-lg-12 fibran">
            <span><img src="{{asset('img/eps/other_products/fibran.png')}}" class="img-fluid" alt="Responsive image"></span>
            <span class="heading">{{__('general.fibran')}}</span>
        </div>
        
        <!-- XPS -->
        <div class="row xps">
            <div class="col-md-7 order-2 order-lg-1">
                <img src="{{asset('img/eps/other_products/fibran_xps.png')}}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-5 order-1 order-lg-2"> 
                <h1><a href='https://fibran.si/portfolio-types/fibranxps/' target="_blank"> Fibran XPS </a></h1>
                <p>{{__('general.fibran_xps_description')}}</p>
                <h4><a href='https://fibran.si/portfolio-item/fibranxps-etics-gf-i/' target="_blank"> FIBRAN XPS ETICS GF </a></h4>
                <h4><a href='https://fibran.si/portfolio-item/fibranxps-300-i/' target="_blank"> FIBRAN XPS 300-L </a></h4>
                <h4><a href='https://fibran.si/portfolio-item/fibranxps-500-l/' target="_blank"> FIBRAN XPS 500-L </a></h4>
            </div>
        </div>

        <!-- GEO -->
        <div class="row geo">
            <div class="col-md-7 order-2 order-lg-1">
                <img src="{{asset('img/eps/other_products/fibran_geo.png')}}" class="img-fluid" alt="Responsive image">
            </div>

            <div class="col-md-5 text-center order-1 order-lg-2 geo"> 
                <h1><a href='https://fibran.si/portfolio-types/fibranxps/' target="_blank"> Fibran GEO </a></h4>
                <p>{{__('general.fibran_xps_description')}}</p>
                <h4><a href='https://fibran.si/portfolio-item/fibrangeo/' target="_blank"> FIBRANgeo BP ETICS PLUS </a></h4>
            </div>
        </div>
        

        <!-- MREZICA -->
        <div class="col-lg-12 mesh">
            <span class="heading-left">{{__('general.facade_glass')}}</span>
            <span class="heading-right">{{__('general.mesh')}}</span>
        </div>

        <div class="row">
            <div class="mesh-product col-md-7 order-2 order-lg-1">
                <img src="{{asset('img/eps/other_products/mrezica.png')}}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="mesh-product col-md-5 order-1 order-lg-2"> 
                <p>{{__('general.mesh_description')}}</p>
            </div>
        </div>
    </div>


</div>
@endsection