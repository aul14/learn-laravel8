@extends('layouts.main')
@section('container')
    <h2 class="mb-3">Post Categories</h2>
    @foreach ($categories as $category)
        <article class="mb-5">
            <ul>
                <li>
                    <a href="/categories/{{ $category['slug'] }}">{{ $category['name'] }}</a>
                </li>
            </ul>
    @endforeach
@endsection
