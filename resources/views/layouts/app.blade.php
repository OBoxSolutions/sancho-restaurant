<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Se no Kanpeki-Sa</title>

    @include('partials.metadata')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Icons --}}
    <link href="https://cdn.materialdesignicons.com/5.5.55/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <bootstrap-navbar current-route="@yield('route')">
        </bootstrap-navbar>

        <main>
            @yield('content')
        </main>
        <app-footer></app-footer>
    </div>
</body>

</html>
