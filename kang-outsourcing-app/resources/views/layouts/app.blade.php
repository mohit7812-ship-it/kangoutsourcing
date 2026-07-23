<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kang Outsourcing — Smart Solutions. Stronger Together.')</title>
    <meta name="description" content="@yield('meta_description', 'Kang Outsourcing builds web platforms, mobile apps and SaaS products for clients across Australia, the USA and the UK — engineered in your time zone.')">

    <link rel="icon" href="{{ asset('images/logo-mark.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
