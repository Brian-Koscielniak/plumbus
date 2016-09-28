<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Plumbus</title>
    <link rel="stylesheet" href="/css/app.css"/>
  </head>
  <body>
    <div id='content'>
      @include('layouts.top-bar')
    </div>
    @yield('content')
    <div class="bottom-bar">&nbsp;</div>
  </body>
</html>
