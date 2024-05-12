<!DOCTYPE html>
<html
  class="dark scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thumb-indigo-800 scrollbar-track-[#9b99fb] hover:scrollbar-thumb-indigo-900 overflow-y-scroll"
  lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="icon" style="width: 100%; height: 100%;" href={{ asset('img/icon.png') }}>
        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="bg-gray-50 dark:bg-darkblue antialiased font-sans scrollbar">
        @inertia
    </body>
</html>
