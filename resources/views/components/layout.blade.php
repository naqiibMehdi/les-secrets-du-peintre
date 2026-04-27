<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Les secrets du peintre - {{ $title }}</title>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <link rel="stylesheet" href="{{ asset("css/tablet.css") }}">
        <link rel="stylesheet" href="{{ asset("css/mobile.css") }}">
        @stack('head')
    </head>
    <body>
        <x-partials.header/>
        {{  $slot }}
        <x-partials.footer/>
        @stack('scripts')
    </body>
</html>