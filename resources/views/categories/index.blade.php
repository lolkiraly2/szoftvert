<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Kategóriák</h1>
    <table>
        <thead>
            <tr>
                <th>Név</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td><a href="/categories/{{ $category->id }}">{{ $category->name }}</a></td>
                <td><a href="/categories/{{ $category->id }}/edit">Szerkesztés </a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>