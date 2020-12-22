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
           <span class="right">200</span >
           <!-- PRODUCT IMG, DESC -->
           <div class="row">
               <div class="col-md-7">
                   <img src="{{asset('img/eps/100_150_200.png')}}" class="img-fluid" alt="Responsive image">
               </div>
               <div class="col-md-5">
                   <h3>{{__('general.eps200_usage')}}</h3>
                   <h2>{{__('general.eps200_desc')}}</h2>
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
                       <span class="value">{{__('general.product_eps200_conductivity_value')}}</span >
                   </div>  
                   <div class="col-md-6">
                       <span><img src="{{asset('img/eps/products/reakcija-na-pozar.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                       <span class="desc">{{__('general.product_eps_fire_desc')}}</span>
                       <span class="value">{{__('general.product_eps200_fire_value')}}</span >
                   </div>  
                   <div class="col-md-6">
                       <span><img src="{{asset('img/eps/products/kompresivna-snaga.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                       <span class="desc">{{__('general.product_eps_firmness_desc')}}</span>
                       <span class="value">{{__('general.product_eps200_firmness_value')}}</span >
                   </div>     
                   <div class="col-md-6">
                       <span><img src="{{asset('img/eps/products/standard.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                       <span class="desc">{{__('general.product_eps_standard_desc')}}</span>
                       <span class="value">{{__('general.product_eps200_standard_value')}}</span >
                   </div>  
                   <div class="col-md-6">
                       <span><img src="{{asset('img/eps/products/savojna-cvrstoca.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                       <span class="desc">{{__('general.product_eps_flexural_strength_desc')}}</span>
                       <span class="value">{{__('general.product_eps200_flexural_strength_value')}}</span >
                   </div>      
                   <div class="col-md-6">
                       <span><img src="{{asset('img/eps/products/dimenzije.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                       <span class="desc">{{__('general.product_eps_dimensions_desc')}}</span>
                       <span class="value">{{__('general.product_eps200_dimensions_value')}}</span >
                   </div>  
                   <div class="col-md-6">
                       <span><img src="{{asset('img/eps/products/dugotrajno-upijanje-vode.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                       <span class="desc">{{__('general.product_eps_water_absorption_desc')}}</span>
                       <span class="value">{{__('general.product_eps200_water_absorption_value')}}</span >
                   </div>    
                   <div class="col-md-6">
                       <span><img src="{{asset('img/eps/products/oznaka-na-rubu.jpg')}}" class="img-fluid" alt="Responsive image"></span>
                       <span class="desc">{{__('general.product_eps_marking_desc')}}</span>
                       <span class="value">{{__('general.product_eps200_marking_value')}}</span >
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
                       <span class="desc">{{__('general.eps_product_usage_200_1')}}</span>
                   </div>
                   <div class="col-md-6" style="display: table">
                       <span><img src="{{asset('img/eps/products/arrow_right.png')}}" class="img-fluid" alt="Responsive image"></span>
                       <span class="desc">{{__('general.eps_product_usage_200_4')}}</span>
                   </div>
                   <div class="col-md-6" style="display: table">
                       <span><img src="{{asset('img/eps/products/arrow_right.png')}}" class="img-fluid" alt="Responsive image"></span>
                       <span class="desc">{{__('general.eps_product_usage_200_6')}}</span>
                   </div>
                   <div class="col-md-6" style="display: table">
                       <span><img src="{{asset('img/eps/products/arrow_right.png')}}" class="img-fluid" alt="Responsive image"></span>
                       <span class="desc">{{__('general.eps_product_usage_200_3')}}</span>
                   </div>
                   <div class="col-md-6" style="display: table">
                       <span><img src="{{asset('img/eps/products/arrow_right.png')}}" class="img-fluid" alt="Responsive image"></span>
                       <span class="desc">{{__('general.eps_product_usage_200_5')}}</span>
                   </div>
                   <div class="col-md-6" style="display: table">
                       <span><img src="{{asset('img/eps/products/arrow_right.png')}}" class="img-fluid" alt="Responsive image"></span>
                       <span class="desc">{{__('general.eps_product_usage_200_2')}}</span>
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
                   <span><img src="{{asset('img/eps/installation/floor_assembly.png')}}" class="img-fluid" alt="Responsive image" style="width: 120px;"></span>
                   <span><img src="{{asset('img/eps/installation/floor_cut.png')}}" class="img-fluid" alt="Responsive image" style="width: 300px;"></span>
               </div>
               <img src="{{asset('img/eps/packaging/thermopor_packaging_200.png')}}" class="img-fluid" alt="Responsive image" style=" width: 250px;">
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
                           <td>EPS-200/1</td>
                           <td>0,31 m2K/W</td>
                           <td>30,00</td>
                       </tr>
                       <tr>
                           <td>EPS-200/2</td>
                           <td>0,63 m2K/W</td>
                           <td>15,00</td>
                       </tr>
                       <tr>
                           <td>EPS-200/3</td>
                           <td>0,94 m2K/W</td>
                           <td>10,00</td>
                       </tr>
                       <tr>
                           <td>EPS-200/4</td>
                           <td>1,25 m2K/W</td>
                           <td>7,50</td>
                       </tr>
                       <tr>
                           <td>EPS-200/5</td>
                           <td>1,56 m2K/W</td>
                           <td>6,00</td>
                       </tr>
                       <tr>
                           <td>EPS-200/6</td>
                           <td>1,88 m2K/W</td>
                           <td>5,00</td>
                       </tr>
                       <tr>
                           <td>EPS-200/7</td>
                           <td>2,19 m2K/W</td>
                           <td>4,00</td>
                       </tr>
                       <tr>
                           <td>EPS-200/8</td>
                           <td>2,50 m2K/W</td>
                           <td>3,50</td>
                       </tr>
                       <tr>
                           <td>EPS-200/9</td>
                           <td>2,81 m2K/W</td>
                           <td>3,00</td>
                       </tr>
                       <tr>
                           <td>EPS-200/10</td>
                           <td>3,13 m2K/W</td>
                           <td>3,00</td>
                       </tr>
                       <tr>
                           <td>EPS-200/12</td>
                           <td>3,75 m2K/W</td>
                           <td>2,50</td>
                       </tr>
                       <tr>
                           <td>EPS-200/14</td>
                           <td>4,38 m2K/W</td>
                           <td>2,00</td>
                       </tr>
                       <tr>
                           <td>EPS-200/16</td>
                           <td>5,00 m2K/W</td>
                           <td>1,50</td>
                       </tr>
                   </table>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
