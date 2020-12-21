<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>News Blog</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-gradient">
        <div class="container">
            <a href="{{ route('news.index') }}" class="navbar-brand">News Blog</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('news.index') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('news.create') }}" class="nav-link">Insert</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>