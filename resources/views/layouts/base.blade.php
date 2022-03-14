<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container py-4">
        <h1 class="text-center mb-3">@yield('title')</h1>
        
        @yield('content')
    </div>
</body>

</html>
