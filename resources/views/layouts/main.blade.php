<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Default Title')</title>
@vite('resources/js/app.js')
@vite('resources/css/app.css')
</head>
<body>
    @yield('content')
</body>
</html>
