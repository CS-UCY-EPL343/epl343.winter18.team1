<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<link rel="stylesheet" type="text/css" href="{{ url('/css/notification.css') }}">
<body>
    <div id="app">
        @include('main')
    </br>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            @if (Auth::guard('admin')->check()){
                document.getElementById("noti").href="admin/notifications";
            }
            @endif
        });
    </script>
</body>
</html>
