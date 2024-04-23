<p>{{ $tag->name}}</p>

<h3>Kapcsolódó blogbejegyzések:</h3>
<ul>
  @forelse ($tag->listOfPosts() as $post)
  <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->slug }}</a></li>
  @empty
  <li>Nincs hozzárendelve blogbejegyzés a címkéhez.</li>
  @endforelse
</ul>
