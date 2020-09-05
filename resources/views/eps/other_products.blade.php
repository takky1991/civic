@extends('layout.main')

@section('content')
<div class="row product_page">
    <div class="col-lg-4 order-2 order-lg-1">
        @include('eps/sidebar')
    </div>
    
    <div class="col-lg-8 order-1 order-lg-2">

        <!-- FIBRAN -->  
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="{{asset('img/eps/other_products/fibran.png')}}" alt="fibran" width="200" style="float: right;">
            </div>

            <div class="col-md-6">
            <h3 style="padding-top:35px;">PARTNERSKI BREND</h3>
            </div>
        </div>
        
        <div class="row" style="padding-top: 50px;">
            <!-- XPS -->
            <div class="row fibran-img">
                <div class="col-md-7 order-2 order-lg-1">
                    <img src="{{asset('img/eps/other_products/fibran_xps.png')}}" alt="fibran" width="380" class="fibran-img">
                </div>

                <div class="col-md-5 text-center order-1 order-lg-2 fibran-xps"> 
                    <h4 class="fibran-xps"><a class="fibran-xps" href='https://fibran.si/portfolio-types/fibranxps/' target="_blank"> Fibran XPS </a></h4>
                    <p class="fibran-xps-p">{{__('general.fibran_xps_description')}}</p>
                    <h4 class="fibran-xps-products"><a class="fibran-xps-products" href='https://fibran.si/portfolio-item/fibranxps-etics-gf-i/' target="_blank"> FIBRAN XPS ETICS GF </a></h4>
                    <h4 class="fibran-xps-products"><a class="fibran-xps-products" href='https://fibran.si/portfolio-item/fibranxps-300-i/' target="_blank"> FIBRAN XPS 300-L </a></h4>
                    <h4 class="fibran-xps-products"><a class="fibran-xps-products" href='https://fibran.si/portfolio-item/fibranxps-500-l/' target="_blank"> FIBRAN XPS 500-L </a></h4>
                </div>
            </div>
            <!-- GEO -->
            <div class="row fibran-img">
                <div class="col-md-7 order-2 order-lg-1">
                    <img src="{{asset('img/eps/other_products/fibran_geo.png')}}" alt="fibran" width="380" class="fibran-img">
                </div>

                <div class="col-md-5 text-center order-1 order-lg-2 fibran-geo"> 
                    <h4 class="fibran-geo"><a class="fibran-geo" href='https://fibran.si/portfolio-types/fibranxps/' target="_blank"> Fibran GEO </a></h4>
                    <p class="fibran-geo-p">{{__('general.fibran_xps_description')}}</p>
                    <h4 class="fibran-geo-products"><a class="fibran-geo-products" href='https://fibran.si/portfolio-item/fibrangeo/' target="_blank"> FIBRANgeo BP ETICS PLUS </a></h4>
                </div>
            </div>
        </div>

        <!-- MREZICA -->
        <div class="row" style="padding-top: 80px;">
            <div class="col-md-6 text-right" style="padding-right: 0px;" >
                <h3>FASADNA</h3>
            </div>

            <div class="col-md-6 text-left">
                <h3 class="mrezica">STAKLENA MREŽICA</h3>
            </div>
        </div>

        <div class="row" style="padding-top: 50px; padding-bottom: 50px;">
            <div class="col-md-7 text-right order-2 order-lg-1" style="padding-right: 0px;">
                <img src="{{asset('img/eps/other_products/mrezica.png')}}" alt="mrezica" width="300px">
            </div>

            <div class="col-md-5 order-1 order-lg-2 text-center fibran-xps"> 
                <p class="fibran-xps-p">{{__('general.mesh_description')}}</p>
            </div>
        </div>
    </div>


</div>
@endsection