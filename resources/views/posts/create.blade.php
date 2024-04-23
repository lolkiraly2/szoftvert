<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div>
            <label for="category">Kategória:</label>
            <select name="category_id" id="category">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="tags">Címkéi:</label>
            <select name="tags[]" id="tags" multiple>
                @forelse ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @empty
                <option value="0">Nincs még címke a blogon</option>
                @endforelse
            </select>

        </div>

        <div>
            <label for="published_at">Publikálás:</label>
            <input type="datetime-local" name="published_at" id="published_at" value="{{ now()->format('Y-m-d H:i') }}">
        </div>

        <div>
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" value="" placeholder="slug">
        </div>


        <div>
            <label for="body">Test</label>
            <textarea name="body" id="" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" value="mentés">
    </form>
</body>

</html>