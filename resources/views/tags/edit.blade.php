<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('tags.update', $tag->id)}}" method="POST">
        @csrf
        @method('put')
        <div>
            <label for="posts">Blogbejegyzései</label>
            <select name="posts[]" id="posts" multiple>
                @forelse ($posts as $post)
                <!-- @if($post->tags->pluck('id')->contains($tag->id)) selected @endif -->
                <option @selected($post->tags->pluck('id')->contains($tag->id))  value="{{ $post->id }}">{{ $post->slug }}</option>
                @empty
                <option value="0">Nincs még bejegyzés a blogon</option>
                @endforelse
            </select>

        </div>

        <div>
            <label for="name">Név</label>
            <input type="text" name="name" id="name" value="{{ $tag->name }}" placeholder="name">
        </div>

        <input type="submit" value="frissítés">
    </form>

    <form action="{{ route('tags.destroy', $tag->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Törlés">
    </form>
</body>

</html>