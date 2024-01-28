@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    @foreach ($users as $auhtor)
    <ul>
        <li>
            <h2><a href="/authors/{{ $author->slug }}">{{ $author->name }}</a></h2>
        </li>
    </ul>
    @endforeach
@endsection