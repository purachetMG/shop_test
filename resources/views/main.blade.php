<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 9 Custom Login Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
</head>
<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
@guest
        <a class="navbar-brand m-3" href="{{ route('shop') }}">SHOPPING</a>
        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            
            <li class="nav-item m-3">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item m-3">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @else
            <a class="navbar-brand m-3" href="#" disabled="">SHOPPING</a>
        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
              </li>
              @endguest
          </ul>
        </div>
      </nav>
    

    @yield('content')
        
    
    
</body>
</html>