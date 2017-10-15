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
  <section class="section" style="min-height: 78vh;">
    <div class="container">
      @yield('content')
    </div>
  </section>
  @yield('javascript')
  <footer class="footer sticky-footer">
    @yield('footer')
    <div class="container">
      <div class="content has-text-centered">
        <p>
          Site by <a href="https://github.com/ryanvade">Ryan Owens</a>
        </p>
      </div>
    </div>
  </footer>
  </body>
</html>
