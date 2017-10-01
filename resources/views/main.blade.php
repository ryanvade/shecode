<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('nav')
    @yield('before-content')
  <section class="section">
    <div class="container">
      @yield('content')
    </div>
  </section>
  @yield('javascript')
  @yield('footer')
  </body>
</html>
