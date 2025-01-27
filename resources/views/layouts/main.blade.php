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
    <header class="header">
        <div class="container">
          @if(Auth::check())
              <h1>{{ Auth::user()->name }}</h1>
          @else
              <h1>Guest</h1>
          @endif
          @auth
          @php
              $fields = json_decode(Auth::user()->field, true); // Decode the JSON data to an array
          @endphp
          @if (!empty($fields))
              @foreach ($fields as $field)
                  <p>{{$field}}</p>
              @endforeach
          @else
              <p>No fields available.</p>
          @endif
          @endauth

          <nav class="navbar">
            <ul>
              <li><a href="{{route('main.home')}}">Home</a></li>
              <li><a href="{{route('main.portfolio')}}">Portfolio</a></li>
              <li><a href="{{route('main.profile')}}">Profile</a></li>
            </ul>
            <div class="auth-buttons">
              @auth
              <a href="{{route('auth.logout')}}">Logout</a>
              @else
              <a href="/login">Login</a>
              <a href="/signup">Sign Up</a>
              @endauth

            </div>
          </nav>
        </div>
      </header>

    @yield('content')
</body>
</html>
