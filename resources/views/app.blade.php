<!DOCTYPE html>
<html
  class="scrollbar scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-track-[#f1b8c6] scrollbar-thumb-red hover:scrollbar-thumb-[#8d1d37] overflow-y-scroll"
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
    <body class="bg-darkblue antialiased font-sans scrollbar">
        @inertia
    </body>
</html>
