<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/blog">Home</a>
        </nav>
    
    </header>
    <br>
     @yield('content')
    <br>
    <footer>
        <p style="text-align:center;">
            &copy; laravel & belajar laravel 2016
        </p>
    </footer>
</body>
</html>