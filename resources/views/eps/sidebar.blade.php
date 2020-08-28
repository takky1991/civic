<div class="sidebar">
    <div class="sidebar-header">
        {{__('general.termopor_products')}}
    </div>
    <ul class="nav flex-column">
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'eps_f60' ? 'active' : ''}}">
            <a class="nav-link active" href="{{localized_route('eps_f60')}}">{{__('general.eps_f60')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'eps_70' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('eps_70')}}">{{__('general.eps_70')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'eps_f80' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('eps_f80')}}">{{__('general.eps_f80')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'eps_100' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('eps_100')}}">{{__('general.eps_100')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'eps_150' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('eps_150')}}">{{__('general.eps_150')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'eps_200' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('eps_200')}}">{{__('general.eps_200')}}</a>
        </li>
    </ul>
</div>

<br>

<div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'eps_advantages' ? 'active' : ''}}">
            <a class="nav-link active" href="{{localized_route('eps_advantages')}}">{{__('general.eps_advantages')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'eps_quality' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('eps_quality')}}">{{__('general.quality')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'eps_facade_system' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('eps_facade_system')}}">{{__('general.facade_system')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'eps_energy_saving' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('eps_energy_saving')}}">{{__('general.energy_saving')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'eps_other_products' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('eps_other_products')}}">{{__('general.other_products')}}</a>
        </li>
    </ul>
</div>

<br>

<div class="sidebar">
    <div class="sidebar-header">
        {{__('general.catalogs')}}
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{route('download_pdf')}}" target="_blank" class="nav-link">
                <i class="fa fa-file-pdf-o mr-1" aria-hidden="true"></i> {{__('general.construction_sheet')}}
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('eps_download_pdf')}}" target="_blank" class="nav-link">
                <i class="fa fa-file-pdf-o mr-1" aria-hidden="true"></i> {{__('general.termopor')}}
            </a>
        </li>
    </ul>
</div>