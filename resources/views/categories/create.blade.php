<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @include('inc.errors')
    <form action="/categories" method="POST">
        @csrf
        Kategória neve: <input type="text" name="name" value="{{ old('name') }}">
        <input type="submit" value="Létrehozás">
    </form>
</body>

</html>