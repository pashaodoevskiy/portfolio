<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!--   <link rel="apple-touch-icon" sizes="57x57" href="public/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="public/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="public/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="public/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="public/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="public/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="public/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="public/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="public/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="public/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="public/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="public/favicon/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff"> -->

  <title>@yield('title', 'Привет, я Паша!')</title>

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @yield('meta_block')
  @yield('meta')

  <meta name="csrf-token-s" content="{{ csrf_token() }}">

  <link href="https://fonts.googleapis.com/css?family=Chau+Philomene+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
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

    @yield('content')

  </main>

  <footer>
    
  </footer>
</body>
</html>