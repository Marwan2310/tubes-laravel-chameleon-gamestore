@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">

                <h2 class="mb-3">{{ $post->title }}</h2>

                {{-- author --}}
                <p>By. <a href="/blog?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in
                    <a href="/posts?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                </p>

                {{-- Image --}}
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;" class="rounded">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif



                {{-- Body --}}
                <table class="table table-hover mt-2" style="width:100%">
                    <tbody>
                        <tr style="text-align:center;">
                            <td background color="#33363b"><span style="color: #FFFFFF;"><b>Description
                                        {{ $post->title }}</b></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>



                {{-- Gameplay  --}}

                <table class="table table-hover mt-2" style="width:100%">
                    <tbody>
                        <tr style="text-align:center;">
                            <td background color="#33363b"><span style="color: #FFFFFF;"><b>Gameplay
                                        {{ $post->title }}</b></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="container">

                    <div style="max-height: 350px; overflow:hidden;">
                        <?php
                        $link = $post->link;

                        $filter = explode('https://www.youtube.com/watch?v=', $link);
                        $result = sizeof($filter) > 1 ? $filter[1] : null;
                        ?>

                        <?php if($result): ?>
                        <iframe loading="lazy" src="https://www.youtube.com/embed/{{ $result }}" width="560"
                            height="315" frameborder="0" allowfullscreen="allowfullscreen">
                            <?php else: ?>
                            {{ 'Wrong link' }}
                            <?php endif; ?>

                    </div>


                </div>



                {{-- Link download --}}

                <table class="table table-hover mt-2" style="width:100%">
                    <tbody>
                        <tr style="text-align:center;">
                            <td background color="#33363b"><span style="color: #FFFFFF;"><b>Download
                                        {{ $post->title }}</b></span>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="container">

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mb-auto">
            <div class="col-md-8">
                <a class="btn btn-info mb-5 text-white font-weight-bold" href="/posts" role="button">Back to
                    Posts</a>
            </div>
        </div>
    </div>
@endsection

<
