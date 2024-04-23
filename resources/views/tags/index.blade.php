<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>
        <h1>Címkék</h1>
        <a href="{{ route('tags.create') }}">Létrehozás</a>
        <table>
            <thead>
                <tr>
                    <th>Neve</th>
                    <th>Blogbejegyzések száma:</th>
                    <th>Funkciók</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                <tr>
                    <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
                    <td>{{$tag->numberOfPosts() }}</td>
                    <td><a href="{{ route('tags.edit', $tag->id) }}">Szerkesztés</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </body>

</html>