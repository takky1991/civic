@extends('layout.main')

@section('content')
    <div class="row pt-5 contact-page">
        <div class="col-12">
            <h1>{{__('general.contact_information')}}</h1>
            <br>
            <br>
        </div>
        
        <div class="col-lg-5 mb-5">
            <h4 class="mt-2 mb-1">Naš <strong>Ured</strong></h4>
            <br>
            <div class="col-md-12 pb-4">

                <div class="info-item">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h5>{{__('general.address')}}</h5>
                    <a class="text-muted" href="#">Mala lisa bb, 77220 Cazin, Bosna i Hercegovina</a>
                </div>

                <br>
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
        </div>
        
        <div class="col-lg-5 mb-5">
            <h4 class="mt-2 mb-1"><strong></strong></h4>
            <br>   
            <br>  
            <div class="col-md-12 pb-4">
                <div class="info-item">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h5>{{__('general.address')}} EU</h5>
                    <a class="text-muted" href="#">Lastovska 11, 10000 Zagreb, Croatia</a>
                </div>

                <br>

                <div class="info-item">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <h5>Email</h5>
                    <a class="text-muted" href="mailto:info@civicbih.com">info@civicbih.com</a>
                </div>

                <br>

                <div class="info-item">
                    <a href="https://www.facebook.com/civicbih" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <h5>Facebook</h5>
                    </a>
                </div>
                    
                <br>
                <div class="info-item">
                    <a href="https://www.instagram.com/civic.group/" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                            <h5>Instagram</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
                       
    <div class="mapouter" style="margin-bottom: 30px;">
        <div class="gmap_canvas">
            <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4687.640639776187!2d15.900874494479527!3d44.9653374606573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4761484cfa41331b%3A0xe9b5267115a6fa90!2sCivi%C4%87%20d.o.o!5e0!3m2!1sen!2sba!4v1579689073776!5m2!1sen!2sba" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="500" frameborder="0"></iframe>
        </div>
    </div>
@endsection