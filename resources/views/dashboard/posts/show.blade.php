@extends('dashboard.layouts.main')

@section('container')
<a href="/dashboard/posts" class="btn btn-success mt-2 ps-2 border-0"><i class="bi bi-arrow-bar-left"></i> Kembali ke My Posts</a>
<a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-primary mt-2 ps-2 border-0"><i class="bi bi-pencil-fill"></i> Ubah</a>
<form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger mt-2 ps-2 border-0" onclick="return confirm('Yakin dihapus?')"><i class="bi bi-trash3"></i>Hapus</button>
</form>
<article>
    <h2>{{ $post->title }}</h2>
    <p>By {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid mt-2">
    @else
        <br>
    @endif
    {!! $post->body !!}
</article>

@endsection