<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuno - Responsive Bootstrap Theme</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/gallery%20css/style.css">
    <link rel="stylesheet" href="css/gallery%20css/style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar_responsive">

<!-- Start Home Section -->

<div id="home">

    <!-- Start of Navigation -->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a href="" class="navbar-brand"><img src="img/nuno.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_responsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar_responsive">
            <ul class="navbar-nav ml-auto">
                <li class="li nav-item"><a href="#home" class="nav-link">Home</a></li>
                <li class="li nav-item"><a href="#course" class="nav-link">Course</a></li>
                <li class="li nav-item"><a href="#portfolio" class="nav-link">Portfolio</a></li>
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
            <div class="carousel-item active" style="background-image: url('img/computers.png')">
                <div class="carousel-caption text-center">
                    <h1>Pillars of Hope</h1>
                    <h3>Animated Gallery</h3>
                    <a href="#portfolio" class="btn btn-outline-light btn-lg">View Gallery</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url('img/computers-2.png')"></div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url('img/computers-3.png')"></div>
        </div>
        <!-- End carousel inner -->

        <!-- Prev & Next Buttons -->

        <a href="#carousel_example_indicators" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a href="#carousel_example_indicators" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>

    </div>
    <!-- End Image Slider -->

</div>
<!-- End Home Section -->


<!--- Start Course Section -->

<div id="course" class="offset">

    <div class="col-12 narrow text-center">
        <h1>Nuno Theme Course</h1>
        <p class="lead">Learn Bootstrap by creating an advanced Bootstrap 4 Responsive Website Template from scratch, with no steps skipped!</p>
        <a class="btn btn-secondary btn-md" href="https://w3newbie.com/courses" target="_blank">Nuno Theme Course</a>
    </div>

</div>
<!-- End Course Section -->


<!-- Start Portfolio Section -->

<div id="portfolio" class="offset">

    <!-- Start Jumbotron -->

    <div class="jumbotron container-fluid">

        <div class="col-12 text-center">
            <h3 class="heading">Gallery</h3>
            <div class="heading-underline"></div>
        </div>

        <!-- Start row -->

        <div class="row no-padding">
            <div class="col-sm-4">
                <div class="portfolio">
                    <a href="img/portfolio/1.png" target="_blank">
                        <img src="img/portfolio/1.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="portfolio">
                    <a href="img/portfolio/2.png" target="_blank">
                        <img src="img/portfolio/2.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="portfolio">
                    <a href="img/portfolio/3.png" target="_blank">
                        <img src="img/portfolio/3.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="portfolio">
                    <a href="img/portfolio/4.png" target="_blank">
                        <img src="img/portfolio/4.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="portfolio">
                    <a href="img/portfolio/5.png" target="_blank">
                        <img src="img/portfolio/5.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="portfolio">
                    <a href="img/portfolio/6.png" target="_blank">
                        <img src="img/portfolio/6.png" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="narrow text-center">
            <div class="col-12">
                <p class="lead">Our Children</p>
            </div>
        </div>
        <!-- End row -->

    </div>
    <!-- End Jumbotron -->

</div>
<!-- End Portfolio Section -->


<!-- Start Team Section -->

<div id="team" class="offset">

    <div class="col-12 text-center">
        <h3 class="heading">Team</h3>
        <div class="heading-underline"></div>
    </div>

    <!-- Start of Row -->

    <div class="row padding">

        <div class="col-md-6">
            <div class="card text-center">
                <img src="img/team/team1.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h4>Jessica Miller</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis deserunt eveniet magnam non perspiciatis porro. Accusamus aliquam asperiores consequuntur culpa fugiat ipsum magnam? Atque debitis fugit officia sint soluta. Commodi.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-center">
                <img src="img/team/team2.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h4>Charles Davis</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis deserunt eveniet magnam non perspiciatis porro. Accusamus aliquam asperiores consequuntur culpa fugiat ipsum magnam? Atque debitis fugit officia sint soluta. Commodi.</p>
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
                <img src="img/nuno.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, beatae culpa delectus dicta dolor doloremque dolores error harum in minima minus modi nam natus officia quo vitae voluptatibus. Facilis, nobis.</p>
                <strong>Contact Info</strong>
                <p>(888) 888-888<br>email@nuno.com</p>

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
<script src="js/my_JavaScript.js"></script>

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

*/?>

<!--<input type="number" id="num_rows" value="<?/*=$num_rows*/?>" hidden>

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