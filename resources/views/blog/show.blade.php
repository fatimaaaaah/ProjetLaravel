@extends('base')

@section('title', $post=>title)
@section('content')
<h1>Mon Blog</h1>
@foreach ($posts as $post)
<article>
    <h1>{{ $post->title }}</h1>
    <p>
        {{ $post->content }}
    </p>
</article>
   {{ $post->link() }}

@endforeach
@endsection
