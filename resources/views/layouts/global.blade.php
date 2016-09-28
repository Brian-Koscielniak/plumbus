<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Plumbus</title>
    <link rel="stylesheet" href="/css/app.css"/>
  </head>
  <body>
    @include('layouts.top-bar')
    <div id='content'>
      @yield('content')
    </div>
    <div class="bottom-bar">&nbsp;</div>
  </body>
</html>
