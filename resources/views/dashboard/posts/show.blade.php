@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-info mb-3 text-white font-weight-bold"><span
                        data-feather="arrow-left"></span> Back to my all posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit"
                    class="btn btn-warning mb-3 text-white font-weight-bold"><span data-feather="edit"></span> Edit</a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger mb-3" onclick="return confirm('Are you sure?')"><span
                            data-feather="x-circle"></span> Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}

                </article>

                <div class="container">
                    <?php
                    $link = $post->link;

                    $filter = explode('https://www.youtube.com/watch?v=', $link);
                    $result = sizeof($filter) > 1 ? $filter[1] : null;
                    ?>

                    <?php if($result): ?>
                    <iframe loading="lazy" src="https://www.youtube.com/embed/{{ $result }}" width="560"
                        height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                    <?php else: ?>
                    {{ 'Wrong link' }}
                    <?php endif; ?>
                </div>

                <div class="container">
                    <div class="d-flex justify-content-center">

                    </div>

                </div>
            </div>
        </div>
    @endsection
