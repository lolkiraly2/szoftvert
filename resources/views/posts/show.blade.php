<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>{{ $post->title }}</h1>
<h2>{{ $post->slug }}</h2>
<h3>Létrehozása: {{ $post->created_at }} | Módosítása: {{ $post->updated_at }}</h3>
<h3>Kategória:</h3>
<a href="/categories/{{ $post->category_id }}">{{ $post->category->name }}</a>
<p>{{ $post->body }}</p>
<a href="/posts">Vissza a listára</a>



</body>

</html>