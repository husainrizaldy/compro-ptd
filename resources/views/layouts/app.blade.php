<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Patdara Jaya')</title>

  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-urbanist antialiased text-gray-900">
  @include('partials.navbar')

  <main class="flex-grow">
    @yield('content')
  </main>

  @include('partials.footer')
</body>
</html>