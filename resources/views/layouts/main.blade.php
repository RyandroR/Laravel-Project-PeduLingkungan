<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}
    ">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
          <div class="container-fluid d-flex justify-content-between" id="navbarNav">
            <div class="logo">
              PeduLingkungan
            </div>
            <ul class="navbar-nav align-center">
              <li class="nav-item">
                <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="/">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link {{ $title == 'Donasi' ? 'active' : '' }}" href="/donasi">Donasi</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link {{ $title == 'Profile' ? 'active' : '' }}" href="/profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title == 'Shop' ? 'active' : '' }}" href="/shop">Shop</a>
              </li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit">
                  Logout
                </button>
              </form>
              @else
                <li class="nav-item">
                  <a class="nav-link {{ $title == 'Login' ? 'active' : '' }}" href="/login">Login</a>
                </li>
              @endauth
              @can('admin')
              <li class="nav-item">
                <a class="nav-link {{ $title == 'Asses Donation' ? 'active' : '' }}" href="/donasi/admin">Asses Donation</a>
              </li>
              @endcan
            </ul>
          </div>
      </nav>
    <h1>
      <div class="container justify-content-center">
        @yield('container')
      </div>
    </h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('/js/script.js') }}"
    ></script>
  </body>
</html>
