<!doctype html>
<html lang="en-gb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pillars of Hope - <?= $page_title ?></title>
    <link rel="shortcut icon" href="../img/pillars_logo.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Swiper Slider CSS-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="navigation-sticky">

    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a href="../index.php" class="navbar-brand">
                <img src="../img/pillars%20logo.png" alt="logo" title="home logo">Pillars
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbar_responsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar_responsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#profile_modal">Profile</a></li>
                    <li class="nav-item"><a href="../gallery.php" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="../about_us.php" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="../contact_us.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <!-- Start Profile Modal -->

    <div class="modal" id="profile_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">OUR PROFILE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <a href="../pdf/Pillars%20page%201-18.pdf" target="_blank">Pillars Page 1 - 18</a>
                        </div>
                        <div class="col">
                            <a href="../pdf/Pillars%20page%201-18.pdf" target="_blank">Pillars Page 19 - 38</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Profile Modal -->

