<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/blog">Blog</a>
        </nav>
    </header>
    <br>
         @yield('content')
    <br>
    <footer>
       <p> &copy;Laravel Dan Belajar Laravel </p>
    </footer>
  </body>
</html>