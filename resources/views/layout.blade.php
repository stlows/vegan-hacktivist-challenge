<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/app.css">
  <title>Veganism Q&A</title>
</head>

<body class="antialiased">
  <div class="container m-5">
    @yield('content')
  </div>

  <script src="/js/app.js"></script>
</body>

</html>