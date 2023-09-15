<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Include Select2 CSS -->
    <link href="{{ asset('frontend/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/custom.js'])

    <!-- Include Alpine JavaScript -->
    {{-- <script defer src="{{ asset('frontend/assets/plugins/alpine/alpine.min.js') }}"></script> --}}

    <!-- Include jQuery (required for Select2) -->
    <script src="{{ asset('frontend/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Include Select2 JavaScript -->
    <script defer src="{{ asset('frontend/assets/plugins/select2/select2.min.js') }}"></script>
</head>

<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    @yield('scripts')
</body>

</html>
