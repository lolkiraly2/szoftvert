<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @include('inc.errors')
    <form action="/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('put')
        Kategória neve: <input type="text" name="name" value="{{ $category->name ?? old('name') }}">
        <input type="submit" value="Frissítés">
    </form>

    <form action="/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Törlés">
    </form>
</body>

</html>