@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">

                <h2 class="mb-3">{{ $post->title }}</h2>

                <p>By. <a href="/blog?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in
                    <a href="/posts?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                </p>

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

                <a class="btn btn-info mt-5 text-white font-weight-bold" href="/posts" role="button">Back to Posts</a>

                <?php
                $link = $post->link;
                $filter = explode('https://www.youtube.com/watch?v=', $link);
                $result = $filter[1];
                echo "https://www.youtube.com/embed/{{ $result }}";
                ?>
                <iframe loading="lazy" src="https://www.youtube.com/embed/{{ $result }}" width="560" height="315"
                    frameborder="0" allowfullscreen="allowfullscreen">


            </div>
        </div>
    </div>
@endsection
