<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .submitButton{

    background: none;
    border: none;
    color: #0066ff;
    text-decoration: underline;
    cursor: pointer;
}
</style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @guest
            @include('inc.navbar')
        @endguest

        @if(Laratrust::hasRole('user'))
            @include('inc.navbar')
        @endif
        
        @if(Laratrust::hasRole('administrator'))
            @include('inc.adminnavbar')
        @endif

        @if(Laratrust::hasRole('superadministrator'))
            @include('inc.adminnavbar')
        @endif
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

<script type="text/javascript">
	document.title = `Viešbučių rezervacijos sistema`
</script>