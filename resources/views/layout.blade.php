<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <form action="{{ route('search') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="Search classroom name" value="{{ $keyword ?? '' }}">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>&nbsp;



    <nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>

    <header>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>
</body>
</html>

<footer>
    <p>&copy; {{ date('Y') }} All rights reserved.</p>
</footer>
