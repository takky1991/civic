<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="language" content="{{app()->getLocale()}}" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="cleartype" content="on" />
        <meta name="HandheldFriendly" content="true">

        <!-- Mobile meta tags -->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="application-name" content="{{config('app.name', 'CIVIC Group')}}">
        <meta name="apple-mobile-web-app-title" content="{{config('app.name', 'CIVIC Group')}}">
        <meta name="msapplication-starturl" content="/">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/favicons/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('img/favicons/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/favicons/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicons/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/favicons/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/favicons/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/favicons/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/favicons/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicons/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('img/favicons/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/favicons/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicons/favicon-16x16.png')}}">
        <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}"/>
        <link rel="manifest" href="{{asset('img/favicons/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('img/favicons/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">


        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#6cc122">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#6cc122">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#6cc122">

        <title>@if(isset($title) && $title){{$title}} | {{config('app.name', 'CIVIC Group')}}@else{{config('app.name', 'CIVIC Group')}}@endif</title>
        <meta name="description" content="{{!empty($description) ? $description : __('meta.description')}}" />
        <meta name="action" content="index" />
        <link rel="canonical" href="{{!empty($canonical) ? $canonical : url()->current()}}"/>
        <link rel="alternate" hreflang="bs" href="{{localized_route(explode('.', request()->route()->getName())[1], [], 'bs')}}" />
        <link rel="alternate" hreflang="en" href="{{localized_route(explode('.', request()->route()->getName())[1], [], 'en')}}" />
        <link rel="alternate" hreflang="x-default" href="{{localized_route(explode('.', request()->route()->getName())[1], [], 'bs')}}" />

        {!! OpenGraph::render() !!}

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            @include('layout/header')

            @isset($breadcrumbs)
            <nav class="breadcrumbs" aria-label="breadcrumb">
                <div class="container">
                    <ol class="breadcrumb">
                        @foreach ($breadcrumbs as $breadcrumb)
                            @if($loop->last)
                            <li class="breadcrumb-item active" aria-current="page">{{$breadcrumb['label']}}</li>
                            @else
                            <li class="breadcrumb-item"><a href="{{$breadcrumb['link']}}">{{$breadcrumb['label']}}</a></li>
                            @endif
                        @endforeach
                    </ol>
                </div>
            </nav>
            @endisset

            <div class="@if(!in_array(explode('.', request()->route()->getName())[1], ['home', 'thermopor'])) container pt-4 pb-5 @endif">
                @yield('content')
            </div>

            @include('layout/footer')
        </div>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ mix('js/frontend_support.js') }}" defer></script>
    </body>
</html>
