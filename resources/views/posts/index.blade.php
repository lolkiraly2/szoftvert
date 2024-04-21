<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>
        <h1>Blogbejegyzések</h1>
        <a href="{{ route('posts.create') }}">Létrehozás</a>
        <table>
            <thead>
                <tr>
                    <th>Cím</th>
                    <th>Funkciók</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->slug }}</a></td>
                    <td><a href="{{ route('posts.edit', $post->id) }}">Szerkesztés</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </body>

</html>