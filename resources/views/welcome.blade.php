<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>hello city</title>
    </head>
    <body class="antialiased">
       <h1>welcome to senegal </h1>
          <p>it's currently {{date('h:i A')}}.</p>

       <footer>
          <p>&copy Copyright {{date('Y')}} <a href="#">About us</a></p>
       </footer>
    </body>
</html>
