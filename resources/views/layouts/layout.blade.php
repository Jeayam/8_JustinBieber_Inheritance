<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 

</head>

<body style="@yield('body_style')">
    @include('partials.header')
    @include('partials.navbar')
    
    @yield('content')

    @include('partials.footer')
</body>
</html>
