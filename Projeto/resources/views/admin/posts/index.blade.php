@extends('admin.layouts.app')

@section('title', 'Listagem dos Pots')

@section('content')
    <a href="{{ route('posts.create') }}">Criar novo Post</a>
    <hr>
    @if ( session('message'))
        <div>
        {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('posts.search') }}" method="post">
        @csrf
        <input type="text" name="search" placeholder="Filtar">
        <button type="submit">Filtrar</button>
    </form>

    <h1>Posts</h1>

    @foreach ($posts as $post)
    <p>
        {{ $post->id }} -
    <img src="{{ url("$post->image") }}" alt="{{ $post->title }}" style="width:50px;">
        {{ $post->title }}

            <a href="{{ route('posts.show', $post->id) }}">[Ver]</a>
            <a href="{{ route('posts.edit', $post->id) }}">[Edit]</a>
    </p>
    @endforeach

    <hr>
    @if (isset($filters))
        {{ $posts->appendds()->links() }}
    @else
        {{ $posts->links() }}
    @endif

@endsection

