<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Default Title')</title>
    @vite('resources/css/auth.css', 'resources/js/auth.js')
    @vite(['resources/css/config.css', 'resources/js/config.js'])
</head>

<body>

@yield('content')

<div class="progress-container" style="  position:absolute;  margin-top:700px; width: 600px;">
    <div class="progress-bar" id="progress-bar"></div>
</div>


</body>
</html>
