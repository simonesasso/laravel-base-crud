<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Omini</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('elements.header')
    <section id="content">

      @yield('content')

    </section>
    @include('elements.footer')
  </body>
</html>
