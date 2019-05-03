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
                document.getElementById("hom").href="admin/home";
                document.getElementById("buy").href="admin/BuyRent";
                document.getElementById("sel").href="admin/SellLet";
                document.getElementById("abo").href="admin/about";
                document.getElementById("con").href="admin/contact";
                document.getElementById("new").href="admin/news";

                document.getElementById("art").href="admin/articles";
                document.getElementById("pro").href="admin/property";
                document.getElementById("cus").href="admin/customers";
                document.getElementById("emp").href="admin/employees";
                document.getElementById("col").href="admin/collaborators";
                document.getElementById("noti").href="admin/notifications";
                document.getElementById("rig").href="admin/rights";
            }
            @endif  
        });

        $(function() {
          $('[autofocus]:not(:focus)').eq(0).focus();
        });
    </script>
</body>
</html>
