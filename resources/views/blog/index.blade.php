@extends('base')

@section('title', 'Acceuil du Blog')
@section('content')
<h1>Mon Blog</h1>
@foreach ($posts as $post)
<article>
    <h2>{{ $post->title }}</h2>
    <p>
        {{ $post->content }}
    </p>
    <p>
        <a href="{{ route('blog.show', ['slug' => $post->slug, 'id' => $post->id]) }}" class="btn btn-primaty">Lire la suite
        </a>
    </p>
</article>

   {{ $post->link() }}

@endforeach
@endsection
