<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pillars - Gallery</title>
    <link rel="shortcut icon" href="img/pillars_logo.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/gallery%20css/style.css">
    <link rel="stylesheet" href="css/gallery%20css/fixed.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar_responsive">

<!-- Start Home Section -->

<div id="home">

    <!-- Start of Navigation -->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a href="index.php" class="navbar-brand">
            <img src="img/pillars%20logo.png" alt="logo" title="home logo">Pillars
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_responsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar_responsive">
            <ul class="navbar-nav ml-auto">
                <li class="li nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="li nav-item"><a href="#add" class="nav-link">add</a></li>
                <li class="li nav-item"><a href="#gallery" class="nav-link">Photos</a></li>
                <li class="li nav-item"><a href="#team" class="nav-link">Team</a></li>
                <li class="li nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Start Image Slider -->

    <div class="carousel slide" id="carousel_example_indicators" data-ride="carousel" data-interval="7000">
        <ol class="carousel-indicators">
            <li class="active" data-target="#carousel_example_indicators" data-slide-to="0"></li>
            <li data-target="#carousel_example_indicators" data-slide-to="1"></li>
            <li data-target="#carousel_example_indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url('img/gallery/intro/WhatsApp Image 2020-12-20 at 20.23.51 (2).jpeg');
                                filter: grayscale(.7) brightness(.5);">
            </div>
                <div class="carousel-caption text-center">
                    <div class="bg-dark mx-auto p-3 w-50">
                        <h2>Animated Gallery</h2>
                        <a href="#gallery" class="btn btn-outline-light btn-lg">View Gallery</a>
                    </div>
                </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url('img/gallery/intro/WhatsApp Image 2020-12-20 at 20.23.49.jpeg');
                                filter: grayscale(.7) brightness(.5);">
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url('img/gallery/intro/WhatsApp Image 2020-12-20 at 20.23.49 (1).jpeg');
                                filter: grayscale(.7) brightness(.5);">
            </div>
        </div>
        <!-- End carousel inner -->

        <!-- Prev & Next Buttons -->

        <a href="#carousel_example_indicators" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a href="#carousel_example_indicators" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>

        <div class="bubbles">
            <img src="img/gallery/intro/bubble.png" alt="">
            <img src="img/gallery/intro/bubble.png" alt="">
            <img src="img/gallery/intro/bubble.png" alt="">
            <img src="img/gallery/intro/bubble.png" alt="">
            <img src="img/gallery/intro/bubble.png" alt="">
        </div>

    </div>
    <!-- End Image Slider -->

</div>
<!-- End Home Section -->


<!--- Start add Section -->

<div id="add" class="offset">

    <!--<div class="col-12 narrow text-center">
        <div class="add_files">
            <h1>Drag and Drop Files</h1>
            <input type="file" id="file_upload" name="attachments[]" value="Browse" multiple>
        </div>
        <h1 id="error"></h1>
        <h1 id="progress"></h1>
    </div>-->

</div>
<!-- End add Section -->


<!-- Start gallery Section -->

<div id="gallery" class="offset">

    <!-- Start Jumbotron -->

    <div class="jumbotron container-fluid">

        <div class="col-12 text-center p-0">
            <h3 class="heading">Gallery</h3>
            <div class="heading-underline"></div>
        </div>

        <!-- Start images -->

        <div class="row no-padding">

            <?php

            $files = glob("img/uploads/*.*");
            $img_no = count($files);
            $start_img_set_2 = ceil($img_no*(1/3));
            $start_img_set_3 = ceil($img_no*(2/3));

            ?>

            <div class="gallery">

                <?php

                for ($i = 0; $i < $start_img_set_2; $i++)
                {
                    $num = $files[$i];
                    echo '<a href="'.$num.'" target="_blank"><img src="'.$num.'" alt="uploaded image"></a>';
                }

                ?>

            </div>

            <div class="gallery">

                <?php

                for ($i = $start_img_set_2; $i < $start_img_set_3; $i++)
                {
                    $num = $files[$i];
                    echo '<a href="'.$num.'" target="_blank"><img src="'.$num.'" alt="uploaded image"></a>';
                }

                ?>

            </div>

            <div class="gallery">

                <?php

                for ($i = $start_img_set_3; $i < $img_no; $i++)
                {
                    $num = $files[$i];
                    echo '<a href="'.$num.'" target="_blank"><img src="'.$num.'" alt="uploaded image"></a>';
                }

                ?>

            </div>
        </div>

        <div class="narrow text-center">
            <div class="col-12">
                <h1>⬆...Our Children...⬆</h1>
            </div>
        </div>
        <!-- End images -->

    </div>
    <!-- End Jumbotron -->

</div>
<!-- End gallery Section -->


<!-- Start Team Section -->

<div id="team" class="offset">

    <div class="col-12 text-center">
        <h3 class="heading">Team</h3>
        <div class="heading-underline"></div>
    </div>

    <!-- Start of Row -->

    <div class="row padding justify-content-center">

        <div class="col-md-6">
            <div class="card text-center">
                <img src="img/gallery/founder.jpeg" alt="" class="card-img-top">
                <div class="card-body">
                    <h4>Mr. Vitalis Nyambeka</h4>
                    <p>Founder/Chairman.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-center">
                <img src="img/gallery/co-founder.jpeg" alt="">
                <div class="card-body">
                    <h4>Mr. Vitalis Nyambeka</h4>
                    <p>Co-Founder.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- End of Row -->

</div>
<!-- End Team Section -->


<!-- Start Contact Section -->

<div id="contact" class="offset">
    <footer>

        <!-- Start row -->

        <div class="row justify-content-center">
            <div class="col-md-5 text-center">
                <h4><img src="img/pillars%20logo.png" alt=""> Pillars</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, beatae culpa delectus dicta dolor doloremque dolores error harum in minima minus modi nam natus officia quo vitae voluptatibus. Facilis, nobis.</p>
                <strong>Contact Info</strong>
                <p class="mb-0">Office: <a href="tel:+254-714-140205">254-714-140205</a></p>
                <p class="mb-0">Mobile: <a href="tel:+254-721-787167">254-721-787167</a></p>
                <p class="mb-0"><a href="mailto:+me@myemail.com">pillarsofhopeathiriver2017@gmail.com</a></p>

                <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram-square"></i></a>
            </div>

            <hr class="socket">
            &copy; Pillars.

        </div>
        <!-- End of row -->
    </footer>
</div>
<!-- End Contact Section -->


<!--- Script Source Files -->

<!-- jQuery -->
<script src="js/jQuery_3.5.1.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Font Awesome -->
<script src="js/all.min.js"></script>

<!-- My Js -->
<script src="js/gallery.js"></script>

<!--    Image upload js    -->
<script src="js/jQuery_file_uploader/vendor/jquery.ui.widget.js" type="text/javascript"></script>
<script src="js/jQuery_file_uploader/jquery.iframe-transport.js" type="text/javascript"></script>
<script src="js/jQuery_file_uploader/jquery.fileupload.js" type="text/javascript"></script>


<!--- End of Script Source Files -->

</body>
</html>

























<?php
/*$page_title = "Gallery";
require_once "templates/header.php";
include "config/db_config.php";

$sql = "SELECT gallery_id FROM gallery_tbl";
$num_rows = mysqli_num_rows(mysqli_query($link, $sql));

*/?><!--

<input type="number" id="num_rows" value="<?/*=$num_rows*/?>" hidden>-->
<!--
<div class="container-fluid" id="uploaded_files">
    <h1 class="text-center text-primary p-1">Our Image Gallery</h1>
    <h3 class="text-center text-success p-1">Responsive</h3>
    <div class="row image_row">
        <div class="image_column">

        </div>
    </div>
</div>

<div class="admin">
    <div class="container-fluid" id="uploaded_admin_imgs">
        <h1 class="text-center text-primary p-1">Our Image Gallery</h1>
        <h3 class="text-center text-success p-1">Responsive</h3>
        <div class="row text-center">
            <div class="col-md-12">
                <div class="mx-auto" id="drop_zone">
                    <h1>Drag and Drop Files</h1>
                    <input type="file" id="file_upload" name="attachments[]" value="Browse" multiple>
                </div>
                <h1 id="error"></h1>
                <h1 id="progress"></h1>
            </div>
        </div>
        <div class="row image_row">
            <div class="image_column">

            </div>
        </div>
    </div>
</div>-->


<!--<div style="height:100vh;"></div>

<!-- Start Socket --

<div class="socket text-light text-center py-1">
    <p>&copy; 2020 Pillars Of Hope Children's Home | All rights Reserved.</p>
</div>
<!-- End Socket -->

<!-- Script Source Files -->

<!-- jQuery --
<script src="../js/jQuery_3.5.1.js"></script>
<!-- Bootstrap JS --
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- Font Awesome --
<script src="../js/all.min.js"></script>
<!-- My Js --
<script src="../js/my_JavaScript.js"></script>

<!-- End Script Source Files --
</body>
</html>
-->