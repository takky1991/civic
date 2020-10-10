<footer class="pt-5">
    <div class="container pb-4">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-4" style="text-align:center">
                <div class="img"><img style="width:200px" v-lazy="'{{asset('img/banner.png')}}'" alt="civic banner"></div>
                <div class="img"><img style="width:150px" v-lazy="'{{asset('img/thermopor_2.png')}}'" alt="civic thermopor"></div>
                <div class="img"><img style="width:120px" v-lazy="'{{asset('img/90godina.png')}}'" alt="civic 90 godina"></div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4 text-center">
                <h5>{{__('general.products')}}</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="{{localized_route('prestige')}}">{{__('general.prestige')}}</a></li>
                    <li><a class="text-muted" href="{{localized_route('elegant')}}">{{__('general.elegant')}}</a></li>
                    <li><a class="text-muted" href="{{localized_route('attractive')}}">{{__('general.attractive')}}</a></li>
                    <li><a class="text-muted" href="{{localized_route('trend')}}">{{__('general.trend')}}</a></li>
                    <li><a class="text-muted" href="{{localized_route('dampa')}}">{{__('general.dampa')}}</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <h5>{{__('general.menu')}}</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="{{localized_route('home')}}">{{__('general.home')}}</a></li>
                    <li><a class="text-muted" href="{{localized_route('profiled_sheets')}}">{{__('general.profiled_sheets')}}</a></li>
                    <li><a class="text-muted" href="{{localized_route('rainwater_system')}}">{{__('general.rainwater_system')}}</a></li>
                    <li><a class="text-muted" href="{{localized_route('thermopor')}}">{{__('general.thermopor')}}</a></li>
                    <li><a class="text-muted" href="{{localized_route('dry_build')}}">{{__('general.dry_build')}}</a></li>
                    <li><a class="text-muted" href="{{localized_route('references')}}">{{__('general.references')}}</a></li>
                    <li><a class="text-muted" href="{{localized_route('contact')}}">{{__('general.contact')}}</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <a href="{{localized_route('contact')}}"><h5>{{__('general.contact')}}</h5></a>
                <ul class="list-unstyled text-small contact">
                    <li><i class="fa fa-phone" aria-hidden="true"></i> {{__('general.hq')}}: <a class="text-muted" href="tel:+38737539007">+387 (0) 37 539 007</a></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> {{__('general.sale')}}: <a class="text-muted" href="tel:+38737307603">+387 (0) 37 307 603</a></li>
                    <li><i class="fa fa-fax" aria-hidden="true"></i> Fax: <a class="text-muted" href="tel:+38737307600">+387 (0) 37 307 600</a></li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> Email: <a class="text-muted" href="mailto:info@civicbih.com">info@civicbih.com</a></li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{__('general.address')}}: <a class="text-muted" href="#">Mala Lisa bb, <br> 77220 Cazin, Bosna i Hercegovina</a></li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{__('general.address')}} EU: <a class="text-muted" href="#">Lastovska 11, <br> 10000 Zagreb, Croatia</a></li>
                    <li>
                        <a href="https://www.facebook.com/civicbih" target="_blank" class="pr-3" style="color: #58595b;font-size: 22px;"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/civic.group/" target="_blank" class="pr-3" style="color: #58595b;font-size: 22px;"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="d-flex justify-content-center">
            <span><i class="fa fa-copyright" aria-hidden="true"></i> {{now()->year}} Civić d.o.o. | {{__('general.all_rights_reserved')}}</span>
        </div>
    </div>
</footer>