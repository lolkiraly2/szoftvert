<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ez itt egy nézet!</h1>
    @if(isset($name))
    <h2>{{ $name }}</h2> 
    <h2>{!! $name !!}</h2>
    @endif
</body>
</html>