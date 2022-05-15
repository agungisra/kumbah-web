<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kumbah Admin | @yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    @include('admin.layouts.navbar')
    <div class="container">
        @yield('container')
    </div>
</body>
</html>