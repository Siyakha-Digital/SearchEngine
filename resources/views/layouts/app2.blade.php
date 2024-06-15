<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />

    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Yowza Search</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://yowza.co.za/images/Logo/April-2024/yowza-logo-mark-1.png" rel="icon" type="image/png">

    <!-- Scripts -->

    <link rel="stylesheet" href="{{asset('backend/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/css/custom.css')}}" />

    <!-- Javascript Assets -->
    <script src="{{asset('backend/js/app.js')}}" defer></script>

{{--    <script src="resources/js/app.js"></script>--}}
{{--    <link rel="stylesheet" href="resources/sass/app.scss">--}}


    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet"
    />
    <script>
        /**
         * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
         */
        localStorage.getItem("_x_darkMode_on") === "true" &&
        document.documentElement.classList.add("dark");
    </script>
</head>
<body class="is-header-blur">
<!-- App preloader-->
{{--<div--}}
{{--    class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900"--}}
{{-->--}}
{{--    <div class="app-preloader-inner relative inline-block size-48"></div>--}}
{{--</div>--}}

<!-- Page Wrapper -->
<div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900">


    <main class="grid w-full grow grid-cols-1 place-items-center">
        @yield('content')
    </main>
</div>

<!-- Footer -->

    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>

    <script src="{{ asset('backend/js/app.js') }}"></script>
</body>
</html>
