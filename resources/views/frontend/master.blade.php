@php
    $config_site = DB::table('config')->first();
@endphp
        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    @yield('meta')
    <!-- Global stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/gijgo.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/swiper.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/styles.css') }}" />
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript">
        var publicPath = '{{ Request::root() . "/public" }}';
        var domainPath = '{{ env('APP_URL') }}';
    </script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/jquery-3.3.1.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <!-- /theme JS files -->
</head>
<body>
<!-- Page header -->
{!! app('App\Http\Controllers\Frontend\HeaderController')->index() !!}
<!-- /page header -->

<!-- Page container -->
<div class="wrap-page">
    @yield ('content')
</div>
<!-- /page container -->

<!-- Footer -->
{!! app('App\Http\Controllers\Frontend\FooterController')->index() !!}
<!-- /footer -->

<!-- Theme JS files -->
<script type="text/javascript" src="{{ asset('public/frontend/js/gijgo.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/swiper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/jquery.fancybox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/main.js') }}"></script>
<!-- /theme JS files -->
</body>
</html>