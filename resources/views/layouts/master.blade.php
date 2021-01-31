<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
</head>
<body>

    <a href="/">Home Page</a>
    <a href="/category">Category Page</a>
    <a href="/product-detail">Product Detail Page</a>
    <a href="/cart">Cart Page</a>

    <hr>

    @yield('content')
</body>
</html>