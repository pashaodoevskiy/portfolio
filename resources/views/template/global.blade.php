<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>@yield('title', 'Привет, я Паша!')</title>

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @yield('meta_block')
  @yield('meta')

  <meta name="csrf-token-s" content="{{ csrf_token() }}">

  <link href="https://fonts.googleapis.com/css?family=Chau+Philomene+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <link rel="shortcut icon" href="">
  <link rel="stylesheet" type="text/css" href="/public/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/public/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="/public/fontawesome-free-5.1.0-web/css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="/public/css/style.css">  

  <script src="/public/js/jquery-3.2.1.min.js"></script>
  <script src="/public/bootstrap/js/bootstrap.min.js"></script>
  <script src="/public/js/scripts.js"></script>

  @yield('styles')
  @yield('scripts')

</head>
<body>
  <header>
    <div class="header">
      
    </div>
  </header>

  <main>

    @if (Auth::check())
      <div id="enter" class="enter"><a href="/logout">&lt;logout&gt;</a></div>
    @else
      <div id="enter" class="enter"><a href="/enter">&lt;login/registration&gt;</a></div>
    @endif 

    @yield('content')
    

  </main>

  <footer>
    
  </footer>
</body>
</html>