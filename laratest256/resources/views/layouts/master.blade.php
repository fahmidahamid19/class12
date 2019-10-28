<html>
<head>
    <title>@yield('title')</title>

    @stack('css')
</head>
<body>
@include('partials.header')

@yield('content')

@include('partials.footer')
</body>
</html>
