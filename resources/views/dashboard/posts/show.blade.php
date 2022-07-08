@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">

                <h2 class="mb-2">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-sm btn-success"><span data-feather="arrow-left"></span> Back to my
                    posts</a>
                <a href="" class="btn btn-sm btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-sm btn-danger"><span data-feather="trash-2"></span> Hapus</a>

                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img img-fluid mt-3">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                {{-- <a href="/posts" class="d-block">Back to posts</a> --}}
            </div>
        </div>
    </div>
@endsection
