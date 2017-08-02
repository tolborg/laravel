<h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
<div>{{ $post->created_at->toFormattedDateString() }}</div>
<p>{{ $post->body }}</p>
