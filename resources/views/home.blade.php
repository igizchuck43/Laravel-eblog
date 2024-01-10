<?php
$project = "Simple Blog Post";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Welcome to <b>{{$project}}</b></h1>
    <p>It is a nice Laravel Project</p>
    <hr>
    <p> <b>NAME: </b> {{$name}} </p>
    {{-- <p> <b>COLORS: </b> {{$colors}} </p> --}}
    {{-- <?php print_r($colors); ?> --}}

    {{-- If Statement --}}
    @if (1<2)
        <p>One is less than two </p>
    
        
    @endif

    {{-- For Loop --}}
    @for ($i = 0; $i < 10; $i++)
        <P>{{$i}}</p>
    @endfor

    {{-- For each loop --}}
    @foreach ($colors as $color)
        <P>{{$color}}</p>
    @endforeach
</body>
</html>