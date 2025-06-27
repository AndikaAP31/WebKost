<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @if (Route::currentRouteName() == 'dashboard')
            MyKost - Dashboard
        @elseif (Route::currentRouteName() == 'booking')
            MyKost - Booking
        @elseif (Route::currentRouteName() == 'invoice')
            MyKost - Invoice
        @elseif (Route::currentRouteName() == 'complaint')
            MyKost - Pengaduan
        @else
            MyKost
        @endif
    </title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-['Poppins'] bg-gray-50">
    {{-- Sidebar --}}
    @include('components.aside')

    {{-- Header / Topbar --}}
    @include('components.header')

    {{-- Main --}}
    <main class="ml-64 mt-16 px-6 py-6">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
