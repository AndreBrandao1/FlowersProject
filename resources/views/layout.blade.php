<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../../public/global.css">
    @yield('css')
</head>

<body>
    <nav>
        <ul>
            <li>HomePage</li>
            <li><a {{ url('/flowers') }}>Inventory</a></li>
            <li>Contact</li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>

</html>
