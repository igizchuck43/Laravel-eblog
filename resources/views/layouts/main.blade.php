<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
</head>
<body>

    <h1>@yield('title')</h1>

    {{-- Linkng routes --}}
    {{-- <p>{{route('about')}}</p>
    <p>{{route('contact')}}</p> --}}

    <p><a href="{{route('home')}}">HOME PAGE</a></p>
    <p><a href="{{route('about')}}">About US</a></p>
    <p><a href="{{route('contact')}}">Contact US</a></p>
    <hr>
    @yield('content')
</body>
</html>