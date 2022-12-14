@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="body">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">


                    <h2 class="mb-3">{{ $post->title }}</h2>


                    {{-- Image --}}
                    @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden; text-align:center; border-radius: 5px">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                class="img-fluid">
                        </div>
                    @else
                    <div style="max-height: 350px; overflow:hidden; text-align:center; border-radius: 5px">
                        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="img-fluid">
                        </div>
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
                    <article class="my-3 fs-8 text-white">
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
                        <div style="max-height: 350px; overflow:hidden; text-align:center;">

                            <?php
                            $link = $post->link;

                            $filter = explode('https://www.youtube.com/watch?v=', $link);
                            $result = sizeof($filter) > 1 ? $filter[1] : null;
                            ?>

                            <?php if($result): ?>
                            <iframe loading="lazy" src="https://www.youtube.com/embed/{{ $result }}" width="560"
                                height="350" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                            <?php else: ?>
                            {{ 'Wrong link' }}
                            <?php endif; ?>

                        </div>
                    </div>

                    @auth

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


                    <div class="col-md-12">
                        <div style="text-align:center" class="d-grid gap-2">
                        <a class="btn btn-outline-primary text-white font-weight-bold "href="{!! $post->download !!}" role="button">
                            Download</a>
                        </div>
                    </div>
                    @endauth
                        <table class="table table-hover mt-2" style="width:100%">
                        <tbody>
                            <tr style="text-align:center;">
                                <td background color="#33363b"><span style="color: #FFFFFF;"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="col-md-8">
                        <a class="btn btn-primary mb-5 text-white font-weight-bold" href="/posts" role="button">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
