<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('titre','hello city')</title>
    </head>
    <body class="antialiased">
       @yield('content')

       <footer>
          <p>
             &copy Copyright {{date('Y')}} 
             &middot <a href="/about-us">About us</a>
          </p>
       </footer>
    </body>
</html>