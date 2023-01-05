@extends('layouts/main')

@section('container')

<?php
$sumber = 'https://www.freetogame.com/api/games?category=shooter';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

$sumber = 'https://www.freetogame.com/api/games?category=mmorpg';
$konten = file_get_contents($sumber);
$mmorpg = json_decode($konten, true);

$sumber = 'https://www.freetogame.com/api/games?category=racing';
$konten = file_get_contents($sumber);
$rc = json_decode($konten, true);

$sumber = 'https://www.freetogame.com/api/games?category=fighting';
$konten = file_get_contents($sumber);
$fing = json_decode($konten, true);

$sumber = 'https://www.freetogame.com/api/games?category=sports';
$konten = file_get_contents($sumber);
$sp = json_decode($konten, true);







?>

    <div class="containerm">
        <div class="body">
            <div class="row">
                <div class="heading-section">
                    <h4>All Genre</h4><br>
                </div>
                @foreach ($categories as $category)
                    <div class="col-md-4 mb-3 rounded">
                        <div class="content">
                            <div class="content-overlay">
                                <div class="content-details fadeIn-bottom">
                                    <a
                                        href="/posts?category={{ $category->slug }}"class="text-white text-decoration-none text-center align-middle">
                                        <h3>{{ $category->title }}</h3>
                                    </a>
                                </div>
                            </div>
                            @if ($category->image)
                                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}"
                                    class="content-image">
                            @else
                                <img src="https://source.unsplash.com/560x315/?{{ $category->title }}"
                                    alt="{{ $category->title }}" class="content-image">
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <div class="containerm">
        <div class="body">
            <div class="row">
                <div class="heading-section">
                    <h4>All Genre From Free to Play Games</h4><br>
                </div>

                <table class="table table-hover mt-2" style="width:100%">
                    <tbody>
                        <tr style="text-align:center;">
                            <td background color="#33363b"><span style="color: #FFFFFF;"><b>Shooter
                                        </b></span>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <?php foreach ($data as $row) {

                    ?>
                    <div class="col-md-4 mb-3 rounded">
                        <div class="content">
                            <div class="content-overlay">
                                <div class="content-details fadeIn-bottom">
                                    <a href="<?php echo $row['freetogame_profile_url']?>"
                                        class="text-white text-decoration-none text-center align-middle">
                                        <h3><?php echo $row['title']?></h3>
                                    </a>
                                </div>
                            </div>
                                <img src="<?php echo $row['thumbnail']?>" alt="..." class="content-image">
                        </div>
                    </div>

                    <?php }?>



                <table class="table table-hover mt-2" style="width:100%">
                    <tbody>
                        <tr style="text-align:center;">
                            <td background color="#33363b"><span style="color: #FFFFFF;"><b>MMORPG
                                        </b></span>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <?php foreach ($mmorpg as $row) {

                    ?>
                    <div class="col-md-4 mb-3 rounded">
                        <div class="content">
                            <div class="content-overlay">
                                <div class="content-details fadeIn-bottom">
                                    <a href="<?php echo $row['freetogame_profile_url']?>"
                                        class="text-white text-decoration-none text-center align-middle">
                                        <h3><?php echo $row['title']?></h3>
                                    </a>
                                </div>
                            </div>
                                <img src="<?php echo $row['thumbnail']?>" alt="..." class="content-image">
                        </div>
                    </div>

                    <?php }?>



                                    <table class="table table-hover mt-2" style="width:100%">
                                        <tbody>
                                            <tr style="text-align:center;">
                                                <td background color="#33363b"><span style="color: #FFFFFF;"><b>Racing
                                                            </b></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <?php foreach ($rc as $row) {

                                        ?>
                                        <div class="col-md-4 mb-3 rounded">
                                            <div class="content">
                                                <div class="content-overlay">
                                                    <div class="content-details fadeIn-bottom">
                                                        <a href="<?php echo $row['freetogame_profile_url']?>"
                                                            class="text-white text-decoration-none text-center align-middle">
                                                            <h3><?php echo $row['title']?></h3>
                                                        </a>
                                                    </div>
                                                </div>
                                                    <img src="<?php echo $row['thumbnail']?>" alt="..." class="content-image">
                                            </div>
                                        </div>

                                        <?php }?>




                                        <table class="table table-hover mt-2" style="width:100%">
                                            <tbody>
                                                <tr style="text-align:center;">
                                                    <td background color="#33363b"><span style="color: #FFFFFF;"><b>Fighting
                                                                </b></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <?php foreach ($fing as $row) {

                                            ?>
                                            <div class="col-md-4 mb-3 rounded">
                                                <div class="content">
                                                    <div class="content-overlay">
                                                        <div class="content-details fadeIn-bottom">
                                                            <a href="<?php echo $row['freetogame_profile_url']?>"
                                                                class="text-white text-decoration-none text-center align-middle">
                                                                <h3><?php echo $row['title']?></h3>
                                                            </a>
                                                        </div>
                                                    </div>
                                                        <img src="<?php echo $row['thumbnail']?>" alt="..." class="content-image">
                                                </div>
                                            </div>

                                            <?php }?>

                                            <table class="table table-hover mt-2" style="width:100%">
                                                <tbody>
                                                    <tr style="text-align:center;">
                                                        <td background color="#33363b"><span style="color: #FFFFFF;"><b>Sports
                                                                    </b></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <?php foreach ($sp as $row) {

                                                ?>
                                                <div class="col-md-4 mb-3 rounded">
                                                    <div class="content">
                                                        <div class="content-overlay">
                                                            <div class="content-details fadeIn-bottom">
                                                                <a href="<?php echo $row['freetogame_profile_url']?>"
                                                                    class="text-white text-decoration-none text-center align-middle">
                                                                    <h3><?php echo $row['title']?></h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                            <img src="<?php echo $row['thumbnail']?>" alt="..." class="content-image">
                                                    </div>
                                                </div>

                                                <?php }?>
@endsection
