<div class="sidebar">
    <div class="sidebar-header">
        {{__('general.rainwater_system')}}
    </div>
    <ul class="nav flex-column">
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'horizontal_gutter' ? 'active' : ''}}">
            <a class="nav-link active" href="{{localized_route('horizontal_gutter')}}">{{__('general.horizontal_gutter')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'gutter_hooks' ? 'active' : ''}}">
            <a class="nav-link active" href="{{localized_route('gutter_hooks')}}">{{__('general.gutter_hooks')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'gutter_kettle' ? 'active' : ''}}">
            <a class="nav-link active" href="{{localized_route('gutter_kettle')}}">{{__('general.gutter_kettle')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'drain_pipes' ? 'active' : ''}}">
            <a class="nav-link active" href="{{localized_route('drain_pipes')}}">{{__('general.drain_pipes')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'pipe_holders' ? 'active' : ''}}">
            <a class="nav-link active" href="{{localized_route('pipe_holders')}}">{{__('general.pipe_holders')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'pipe_elbows' ? 'active' : ''}}">
            <a class="nav-link active" href="{{localized_route('pipe_elbows')}}">{{__('general.pipe_elbows')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'gutter_closure' ? 'active' : ''}}">
            <a class="nav-link active" href="{{localized_route('gutter_closure')}}">{{__('general.gutter_closure')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'gutter_corner' ? 'active' : ''}}">
            <a class="nav-link active" href="{{localized_route('gutter_corner')}}">{{__('general.gutter_corner')}}</a>
        </li>
        <li class="nav-item {{explode('.', request()->route()->getName())[1] == 'perforated_mesh' ? 'active' : ''}}">
            <a class="nav-link active" href="{{localized_route('perforated_mesh')}}">{{__('general.perforated_mesh')}}</a>
        </li>
    </ul>
</div>