@extends('layout.main')

@section('content')
<div class="row product_page">
    <div class="col-lg-4 order-2 order-lg-1">
        @include('eps/sidebar')
    </div>

 <!-- THERMOPOR PRODUCT PAGE -->
 <div class="col-lg-8 order-1 order-lg-2">
        <div class="product">
            <!-- HEADING -->
            <span class="left">EPS</span>
            <span class="right">70</span >
            <!-- PRODUCT IMG, DESC -->
            <div class="row">
                <div class="col-md-7">
                    <img src="{{asset('img/eps/FE60_F80_70.jpg')}}" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-5">
                    <h3>{{__('general.eps70_usage')}}</h3>
                    <h2>{{__('general.eps70_desc')}}</h2>
                </div>
            </div>
            <!-- TECHNICAL -->
            <div class="technical">
                <div class="row">
                    <div class="col-md-12">
                        <hr style="border-top: 3px solid rgba(0, 0, 0, 0.1);">
                        <h1>{{__('general.product_eps_technical')}}</h1>
                    </div>
                    <div class="col-md-6">
                        <span><img src="{{asset('img/eps/products/toplinska-provodljivost.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.product_eps_conductivity_desc')}}</span>
                        <span class="value">{{__('general.product_eps70_conductivity_value')}}</span >
                    </div>  
                    <div class="col-md-6">
                        <span><img src="{{asset('img/eps/products/reakcija-na-požar.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.product_eps_fire_desc')}}</span>
                        <span class="value">{{__('general.product_eps70_fire_value')}}</span >
                    </div>  
                    <div class="col-md-6">
                        <span><img src="{{asset('img/eps/products/kompresivna-snaga.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.product_eps_firmness_desc')}}</span>
                        <span class="value">{{__('general.product_eps70_firmness_value')}}</span >
                    </div>     
                    <div class="col-md-6">
                        <span><img src="{{asset('img/eps/products/standard.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.product_eps_standard_desc')}}</span>
                        <span class="value">{{__('general.product_eps70_standard_value')}}</span >
                    </div>  
                    <div class="col-md-6">
                        <span><img src="{{asset('img/eps/products/savojna-čvrstoća.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.product_eps_flexural_strength_desc')}}</span>
                        <span class="value">{{__('general.product_eps70_flexural_strength_value')}}</span >
                    </div>      
                    <div class="col-md-6">
                        <span><img src="{{asset('img/eps/products/dimenzije.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.product_eps_dimensions_desc')}}</span>
                        <span class="value">{{__('general.product_eps70_dimensions_value')}}</span >
                    </div>  
                    <div class="col-md-6">
                        <span><img src="{{asset('img/eps/products/dugotrajno-upijanje-vode.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.product_eps_water_absorption_desc')}}</span>
                        <span class="value">{{__('general.product_eps70_water_absorption_value')}}</span >
                    </div>    
                    <div class="col-md-6">
                        <span><img src="{{asset('img/eps/products/oznaka-na-rubu.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.product_eps_marking_desc')}}</span>
                        <span class="value">{{__('general.product_eps70_marking_value')}}</span >
                    </div>  
                </div>
            </div>
            <!-- USAGE -->
            <div class="usage">
                <div class="container" style="text-align: center">
                    <h1>{{__('general.product_eps_usage')}}</h1>
                </div>
                <div class="row">
                    <div class="col-md-6" style="display: table">
                        <span><img src="{{asset('img/eps/products/arrow_right.png')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.eps_product_usage_70_1')}}</span>
                    </div>
                    <div class="col-md-6" style="display: table">
                        <span><img src="{{asset('img/eps/products/arrow_right.png')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.eps_product_usage_70_2')}}</span>
                    </div>
                    <div class="col-md-6" style="display: table">
                        <span><img src="{{asset('img/eps/products/arrow_right.png')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.eps_product_usage_70_6')}}</span>
                    </div>
                    <div class="col-md-6" style="display: table">
                        <span><img src="{{asset('img/eps/products/arrow_right.png')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.eps_product_usage_70_3')}}</span>
                    </div>
                    <div class="col-md-6" style="display: table">
                        <span><img src="{{asset('img/eps/products/arrow_right.png')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.eps_product_usage_70_5')}}</span>
                    </div>
                    <div class="col-md-6" style="display: table">
                        <span><img src="{{asset('img/eps/products/arrow_right.png')}}" class="img-fluid" alt="Responsive image"></span>
                        <span class="desc">{{__('general.eps_product_usage_70_4')}}</span>
                    </div>
                    <div class="container thermopor-white">
                        <img src="{{asset('img/eps/thermopor_logo_yellowwhite.png')}}" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>


            <!-- ASSEMBLY -->
            <div class="assembly">
                <h1>{{__('general.product_eps_assembly')}}</h1>
                <div class="container">
                    <span><img src="{{asset('img/eps/installation/roof_assembly.png')}}" class="img-fluid" alt="Responsive image" style="width: 120px;"></span>
                    <span><img src="{{asset('img/eps/installation/roof_cut.png')}}" class="img-fluid" alt="Responsive image" style="width: 300px;"></span>
                </div>
                <img src="{{asset('img/eps/packaging/thermopor_packaging_70.png')}}" class="img-fluid" alt="Responsive image" style=" width: 250px;">
            </div>
            <!-- RESISTANCE TABLE -->
            <div class="resistance">
                <hr style="border-top: 3px solid rgba(0, 0, 0, 0.1);">
                <h1>{{__('general.thermal_resistance')}}</h1>
                <div style="text-align: center">
                    <table>        
                        <tr>
                            <th>{{__('general.name')}}</th>
                            <th>{{__('general.thermal_resistance')}}</th>
                            <th>{{__('general.m2/pack')}}</th>
                        </tr>
                        <tr>
                            <td>EPS-70/1</td>
                            <td>0,25 m2K/W</td>
                            <td>30,00</td>
                        </tr>
                        <tr>
                            <td>EPS-70/2</td>
                            <td>0,50 m2K/W</td>
                            <td>15,00</td>
                        </tr>
                        <tr>
                            <td>EPS-70/3</td>
                            <td>0,75 m2K/W</td>
                            <td>10,00</td>
                        </tr>
                        <tr>
                            <td>EPS-70/4</td>
                            <td>1,00 m2K/W</td>
                            <td>7,50</td>
                        </tr>
                        <tr>
                            <td>EPS-70/5</td>
                            <td>1,25 m2K/W</td>
                            <td>6,00</td>
                        </tr>
                        <tr>
                            <td>EPS-70/6</td>
                            <td>1,50 m2K/W</td>
                            <td>5,00</td>
                        </tr>
                        <tr>
                            <td>EPS-70/7</td>
                            <td>1,75 m2K/W</td>
                            <td>4,00</td>
                        </tr>
                        <tr>
                            <td>EPS-70/8</td>
                            <td>2,00 m2K/W</td>
                            <td>3,50</td>
                        </tr>
                        <tr>
                            <td>EPS-70/9</td>
                            <td>2,25 m2K/W</td>
                            <td>3,00</td>
                        </tr>
                        <tr>
                            <td>EPS-70/10</td>
                            <td>2,50 m2K/W</td>
                            <td>3,00</td>
                        </tr>
                        <tr>
                            <td>EPS-70/12</td>
                            <td>3,00 m2K/W</td>
                            <td>2,50</td>
                        </tr>
                        <tr>
                            <td>EPS-70/14</td>
                            <td>3,50 m2K/W</td>
                            <td>2,00</td>
                        </tr>
                        <tr>
                            <td>EPS-70/16</td>
                            <td>4,00 m2K/W</td>
                            <td>1,50</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
