@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <form class="d-flex bg-transparent" action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <input class="form-control me-2 " type="text" placeholder="Search.." name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-light text-dark font-weight-bold" type="submit">Search</button>
            </form>
        </div>
    </div>


    @if ($posts->count(5))
        <div class="containerm">
            <div class="body">
                <div class="row">
                    <div class="heading-section">
                        <h4>All Games</h4><br>
                    </div>
                    @foreach ($posts->skip(0) as $post)
                        <div class="col-md-4 mb-3 rounded">
                            <div class="content">
                                <div class="content-overlay">
                                    <div class="content-details fadeIn-bottom">
                                        <a href="/posts/{{ $post->slug }}"
                                            class="text-white text-decoration-none text-center align-middle">
                                            <h3>{{ $post->title }}</h3>
                                        </a>
                                    </div>
                                </div>
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                        class="content-image">
                                @else
                                    <img src="https://source.unsplash.com/560x315/?{{ $post->category->name }}"
                                        alt="{{ $post->category->name }}" class="content-image">
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <br>
    @else
        <p class="text-center fs-4">Not Post Found.</p>
    @endif

    <div class="container d-flex justify-content-end">
        {{ $posts->links() }}
    </div>



@endsection
