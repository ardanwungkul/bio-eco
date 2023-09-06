<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div
        class="h-screen pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900 gap-5 grid grid-cols-2 place-content-center overflow-hidden">
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-6 bg-white dark:bg-gray-800 shadow-xl overflow-hidden sm:rounded-lg h-min place-self-center border border-white">
            {{ $slot }}
        </div>
        <div class="overflow-hidden self-center place-self-center">
            <lottie-player src="https://lottie.host/01a9bd4e-8fac-4e19-983f-1abe46a99a6d/BhCl6raK6L.json"
                background="transparent" speed="1" mode="bounce" loop autoplay></lottie-player>
        </div>
    </div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/lottie-player.js"></script>
    <script src="https://kit.fontawesome.com/a6c5beee0a.js" crossorigin="anonymous"></script>

</body>

</html>
