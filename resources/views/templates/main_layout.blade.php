<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <title>{{ $title }}</title>
</head>
<body>
    @include('nav')
    
    @yield('content')

    @include('footer')
    
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
</html>