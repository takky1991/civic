@extends('layout.main')

@section('content')
    <div class="row pt-5 contact-page">
        <div class="col-12">
            <h1>{{__('general.contact_information')}}</h1>
            <br>
            <br>
        </div>
        <div class="col-lg-6 mb-5">
            <div class="row">
                <div class="col-md-6 pb-4">
                    <div class="info-item">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h5>{{__('general.hq')}}</h5>
                        <a class="text-muted" href="tel:+38737539007">+387 (0) 37 539 007</a>
                    </div>
                    <br>
        
                    <div class="info-item">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h5>{{__('general.sale')}}</h5>
                        <a class="text-muted" href="tel:+38737307603">+387 (0) 37 307 603</a>
                    </div>                    
        
                    <br>
        
                    <div class="info-item">
                        <i class="fa fa-fax" aria-hidden="true"></i>
                        <h5>Fax</h5>
                        <a class="text-muted" href="tel:+38737307600">+387 (0) 37 307 600</a>
                    </div>
                </div>

                <div class="col-md-6 pb-4">
                    <div class="info-item">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <h5>Email</h5>
                        <a class="text-muted" href="mailto:info@civicbih.com">info@civicbih.com</a>
                    </div>
        
                    <br>
        
                    <div class="info-item">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h5>{{__('general.address')}}</h5>
                        <a class="text-muted" href="#">Mala lisa bb, <br>77220 Cazin, Bosna i Hercegovina</a>
                    </div>
        
                    <br>
        
                    <div class="info-item">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h5>{{__('general.address')}} EU</h5>
                        <a class="text-muted" href="#">Lastovska 11, <br>10000 Zagreb, Croatia</a>
                    </div>
                </div>

                <div class="col-md-6 pb-4">
                    <div class="info-item">
                        <a href="https://www.facebook.com/civicbih" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <h5>Facebook</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-item">
                        <a href="https://www.instagram.com/civic.group/" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <h5>Instagram</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=cazin&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection