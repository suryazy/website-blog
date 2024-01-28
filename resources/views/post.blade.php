@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid mt-2">
        @else
            <br>
        @endif
        {!! $post->body !!}
        <br><a href="/posts">Kembali ke blog</a>
    </article>
@endsection