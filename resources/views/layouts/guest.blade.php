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

<body class="font-sans antialiased">
    <div class="min-h-screen flex">
        <!-- División izquierda -->
        <div class="flex-1 bg-gradient-to-b from-chathams-blue-900 to-white flex flex-col justify-center">
            <div>
                <h1 class="text-white text-[55px] font-bold ml-24">MONLAU</h1>
                <p class="text-white text-xl font-bold ml-24">Make youre own way</p>
            </div>
        </div>

        <!-- División derecha -->
        <div class="flex-1">
            <div class="min-h-screen flex flex-col justify-center items-center p-6">
                <img src="./images/monlau.png" alt="monlauLogo" class="max-h-[125px] mb-4">
                <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-2xl overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</body>


</html>