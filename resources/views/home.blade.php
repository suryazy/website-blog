@extends('layouts.main')

@section('container')
    <h1 class="text-center">{{ $title }}</h1>
    <form action="/posts">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </div>                      
            </div>
        </div>
    </form>
@if ($posts->count())
    <div class="card mb-3">
        @if ($posts[0]->image)
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="" class="img-fluid mt-2" width="800">
            </div>
        </div>
        @else
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <img src="/img/hutao.jpg" alt="hutao" width="800">
                </div>
            </div>
        @endif
        <div class="card-body text-center">
            <h5 class="card-title">{{ $posts[0]->title }}</h5>
            <small class="text-body-secondary">
            <p>By <a href="users/{{ $posts[0]->user->name }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a></p>
            category <a href="/categories/{{ $posts[0]->category->slug }}"class="text-decoration-none">{{ $posts[0]->category->name }}</a></h2>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <p>{{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
        </div>
    </div> 
    @foreach ($posts->skip(1) as $post)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">By : {{ $post->user->name }}</h6>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}" class="card-link">Read More..</a>
            </div>
        </div> 
    @endforeach
@else
    <p class="text-center fs-4">No Post Found.</p>
@endif
{{ $posts->links() }}
@endsection