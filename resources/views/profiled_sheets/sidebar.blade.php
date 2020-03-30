<div class="sidebar">
    <div class="sidebar-header">
        {{__('general.profiled_sheets')}}
    </div>
    <ul class="nav flex-column">
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'prestige' ? 'active' : ''}}">
            <a class="nav-link active" href="{{localized_route('prestige')}}">{{__('general.tile_board')}} - {{__('general.prestige')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'trend' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('trend')}}">{{__('general.trapezoidal_sheet')}} - {{__('general.trend')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'attractive' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('attractive')}}">{{__('general.trapezoidal_sheet')}} - {{__('general.attractive')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'elegant' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('elegant')}}">{{__('general.trapezoidal_sheet')}} - {{__('general.elegant')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'paneling' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('paneling')}}">{{__('general.paneling')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'dampa' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('dampa')}}">{{__('general.dampa')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'siege_sheets' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('siege_sheets')}}">{{__('general.siege_sheets')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'montage' ? 'active' : ''}}">
            <a class="nav-link" href="{{localized_route('montage')}}">{{__('general.montage')}}</a>
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
    </ul>
</div>