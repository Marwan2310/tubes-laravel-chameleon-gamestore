@extends('layouts.main')

@section('container')

<?php
$sumber = 'https://www.freetogame.com/api/games/id';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
?>


  <?php foreach ($data['results'] as $row) {

    ?>
    <div class="container">
        <div class="body">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">


                    <h2 class="mb-3"><?php echo $row['title']?></h2>


                    {{-- Image --}}

                        <div style="max-height: 350px; overflow:hidden; text-align:center;" class="rounded">
                            <img src="" alt=""
                                class="img-fluid">
                        </div>




                    {{-- Body --}}
                    <table class="table table-hover mt-2" style="width:100%">
                        <tbody>
                            <tr style="text-align:center;">
                                <td background color="#33363b"><span style="color: #FFFFFF;"><b>Description
                                           </b></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <article class="my-3 fs-5">

                    </article>


                    {{-- Gameplay  --}}

                    <table class="table table-hover mt-2" style="width:100%">
                        <tbody>
                            <tr style="text-align:center;">
                                <td background color="#33363b"><span style="color: #FFFFFF;"><b>Gameplay
                                            </b></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="container">
                        {{-- <div style="max-height: 350px; overflow:hidden; text-align:center;">

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

                        </div> --}}
                    </div>



                    {{-- Link download --}}

                    <table class="table table-hover mt-2" style="width:100%">
                        <tbody>
                            <tr style="text-align:center;">
                                <td background color="#33363b"><span style="color: #FFFFFF;"><b>Download
                                            </b></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
@auth

<div class="col-md-12">
    <div style="text-align:center">
    <a class="btn btn-primary mb-5 text-white font-weight-bold" href="" role="button">
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
                        <a class="btn btn-primary mb-5 text-white font-weight-bold" href="/posts" role="button">Back to
                            Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
@endsection
