<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <title>E-Hospital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/range-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/fullcalender.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('css/color-1.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="loader-wrapper">
        <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner-1"></div>
        </div>
    </div>

    <div class="tap-top">
        <i data-feather="chevrons-up"></i>
    </div>

    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('inc.header')

        <div class="page-body-wrapper">
            @include('inc.sidebar')

            <div class="page-body">
                @include('inc.message')

                @yield('content')
            </div>

            @include('inc.footer')
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('js/scrollbar/custom.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick/slick.js') }}"></script>
    <script src="{{ asset('js/header-slick.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('js/calendar/fullcalender.js') }}"></script>
    <script src="{{ asset('js/calendar/custom-calendar.js') }}"> </script>
    <script src="{{ asset('js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('js/datatable/datatables/datatable.custom1.js') }}"></script>
    <script src="{{ asset('js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('js/range-slider/rangeslider-script.js') }}"></script>
    <script src="{{ asset('js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('js/dashboard/dashboard_2.js') }}"></script>
    <script src="{{ asset('js/height-equal.js') }}"></script>
    <script src="{{ asset('js/animation/wow/wow.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/theme-customizer/customizer.js') }}"></script>
    <script>new WOW().init();</script>
</body>
</html>
