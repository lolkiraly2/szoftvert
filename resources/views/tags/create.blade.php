<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('tags.store')}}" method="POST">
        @csrf

        <div>
            <label for="posts">Blogbejegyzései</label>
            <select name="posts[]" id="posts" multiple>
                @forelse ($posts as $post)
                <option value="{{ $post->id }}">{{ $post->slug }}</option>
                @empty
                <option value="0">Nincs még bejegyzés a blogon</option>
                @endforelse
            </select>

        </div>

        <div>
            <label for="name">Név</label>
            <input type="text" name="name" id="name" value="" placeholder="name">
        </div>

        <input type="submit" value="mentés">
    </form>
</body>

</html>