<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
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
