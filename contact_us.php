<?php
$page_title = "Contact us";

require_once "templates/header.php";

?>

<section class="main-contact-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card card-body py-5 border-0 shadow">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card card-body card-contact bg-theme">
                                <h1>Contact Us</h1>
                                <div class="media mb-3 align-items-center">
                                    <div class="icon-part mr-3">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="m-0 text-white">Athi River, Mavoko Machakos</h5>
                                    </div>
                                </div>
                                <div class="media mb-3 align-items-center">
                                    <div class="icon-part mr-3">
                                        <i class="fas fa-mail-bulk"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="m-0 text-white"><a href="mailto:+me@myemail.com">pillarsofhopeathiriver2017@gmail.com</a></h5>
                                    </div>
                                </div>
                                <div class="media mb-3 align-items-center">
                                    <div class="icon-part mr-3">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="m-0 text-white">Office: <a href="tel:+254-714-140205">+254-714-140205</a></h5>
                                    </div>
                                </div>
                                <div class="media mb-3 align-items-center">
                                    <div class="icon-part mr-3">
                                        <i class="fas fa-mobile"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="m-0 text-white">Mobile: <a href="tel:+254-721-787167">+254-721-787167</a></h5>
                                    </div>
                                </div>
                                <ul class="contact_social">
                                    <li><a href="" target="_blank" title="Twitter"><i class="fab fa-twitter"
                                                                                      style="color: #00aced"></i></a></li>
                                    <li><a href="" target="_blank" title="Facebook"><i class="fab fa-facebook"
                                                                                       style="color: #3b5998"></i></a></li>
                                    <li><a href="" target="_blank" title="Instagram"><i class="fab fa-instagram"
                                                                                        style="color: #3f729b"></i></a></li>
                                    <li><a href="" target="_blank" title="Youtube"><i class="fab fa-youtube"
                                                                                      style="color: #c4302b"></i></a></li>
                                    <li><a href="" target="_blank" title="Gmail"><i class="fas fa-envelope"
                                                                                    style="color: #0e76a8"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <form id="contact_form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile number...">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message here..."></textarea>
                                    </div>
                                </div>
                                <div class="input_box">
                                    <input class="btn btn-outline-dark" type="submit" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
<section>
    <div class="my_container">
        <div class="contact_info">
            <div>
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <span>Athi River, Mavoko Machakos</span>
                    </li>
                    <li>
                        <span><i class="fas fa-mail-bulk"></i></i></span>
                        <span><a href="mailto:+me@myemail.com">pillarsofhopeathiriver2017@gmail.com</a></span>
                    </li>
                    <li>
                        <span><i class="fas fa-phone"></i></span>
                        <span>Office: <a href="tel:+254-714-140205">+254-714-140205</a></span>
                        <span>Mobile: <a href="tel:+254-721-787167">+254-721-787167</a></span>
                    </li>
                </ul>
                <ul class="contact_social">
                    <li><a href="" target="_blank" title="Twitter"><i class="fab fa-twitter"
                                                                      style="color: #00aced"></i></a></li>
                    <li><a href="" target="_blank" title="Facebook"><i class="fab fa-facebook"
                                                                       style="color: #3b5998"></i></a></li>
                    <li><a href="" target="_blank" title="Instagram"><i class="fab fa-instagram"
                                                                        style="color: #3f729b"></i></a></li>
                    <li><a href="" target="_blank" title="Youtube"><i class="fab fa-youtube"
                                                                      style="color: #c4302b"></i></a></li>
                    <li><a href="" target="_blank" title="Gmail"><i class="fas fa-envelope"
                                                                    style="color: #0e76a8"></i></a></li>
                </ul>
            </div>
        </div>

        <!--    End of contact Info    -->

        <!--    Contact Form

        <div class="contact_form">
            <h2>Send a Message</h2>
            <div class="form_box">
                <div class="form-group">
                    <input type="text" class="form-control" id="first_name" name="first_name">
                    <span>First Name</span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="last_name" name="last_name">
                    <span>Last Name</span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email">
                    <span>Email Address</span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control">
                    <span>Mobile Number</span>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                    <span>Write your message here...</span>
                </div>
                <div class="input_box">
                    <input type="submit" value="Send">
                </div>
            </div>
        </div>
    </div>
</section>-->

<!-- Script Source Files -->

<!-- jQuery -->
<script src="js/jQuery_3.5.1.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome -->
<script src="js/all.min.js"></script>
<!-- My Js -->
<script src="js/my_js.js"></script>

<!-- End Script Source Files -->
</body>
</html>