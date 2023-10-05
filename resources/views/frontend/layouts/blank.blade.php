<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- <link href="{{ asset('frontend/assets/plugins/phosphoric-icon/phosphoric-icon.css') }}" rel="stylesheet" /> --}}
    @vite(['resources/css/tailwind.css', 'resources/css/app.css',])
    @yield('styles')
</head>

<body>
    @yield('content')

    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    @yield('scripts')
</body>

</html>
