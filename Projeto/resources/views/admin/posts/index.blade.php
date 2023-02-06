<a href="{{ route('test') }}">kajshdjdas</a>
<hr>
<h1>Lista de Posts</h1>

@foreach ($posts as $post)
    <p>
        {{ $post->title }}
        [ <a href="{{ route('posts.show', $post->id)}}"></a></p>]
@endforeach


