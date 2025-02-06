	<?php session_start();  include('config.php'); error_reporting(0); ?>
<!------------------------------ # connection ------------------------------->
						<?php
												error_reporting(0);
												include("config.php");

												
												$sqla="select * from setting";
												$updt = mysqli_query($connection,$sqla) ;
												$slct = mysqli_fetch_array($updt);
											
												?>



<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="description" content="AKOS Print | Print Portal | Print Portal | Prints Portals">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="My Best Print">

    <meta property="og:url" content="index.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="AKOS Print | Print Portal | Print Portal | Prints Portals" />
    <meta property="og:description" content="AKOS Print| Print Portal | Print Portal | Prints Portals">
    <meta property="og:image" content="AKOS Print | Print Portal | Print Portal | Prints Portals" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="" />
    <meta property="twitter:url" content="" />
    <meta name="twitter:title" content="AKOS Print | Print Portal | Print Portal | Prints Portals" />
    <meta name="twitter:description" content="AKOSt Print | Print Portal | Print Portal | Prints Portals" />
    <meta name="twitter:image" content="" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/icofont.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">

    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title><?php  echo $slct['webname'];?> | Home</title>
<link rel="shortcut icon" type="image/png" href="<?php  echo $slct['fevicon'];?>">
</head>

<body>
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <ul class="social-links">

                <div class="col-lg-7 col-md-7">
                    <ul class="header-info">


                        <li>+91-<?php  echo $slct['supportno1'];?></li>
                        <li><a href="<?php  echo $slct['appurl'];?>" target="blank"><img src="assets/img/android.png" width="105"></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </header>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <a class="navbar-brand" href="<?php  echo $slct['weburl'];?>"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <div class="logo mr-auto">
        <!--h1 class="text-light"><a href="index.html"><span>Bootslander</span></a></h1-->
        <!-- Uncomment below if you prefer to use an image logo -->
       <a href="<?php echo $slct['weburl']; ?>"><img src="<?php echo $slct['weblogo']; ?>";
echo "" alt="" class="img-fluid"></a>
      </div>
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item"><a class="nav-link" href="<?php  echo $slct['weburl'];?>">Home</a></li>



                            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>


                            <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>


                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                            <li class="nav-item"><a href="login.php" class="btn btn-primary">Login </a></li>

                            <li class="nav-item"><a href="reg.php" class="btn btn-primary">Sign up</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>



    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/slider/aahs.jpg" class="d-block w-100" alt="img">
            </div>
            <!--  <div class="carousel-item">
      <img src="assets/img/slider/frist png copy.jpg" class="d-block w-100" alt="img">
    </div>
    <div class="carousel-item">
      <img src="assets/img/slider/frist png copy.jpg" class="d-block w-100" alt="img">
    </div>
    <div class="carousel-item">
      <img src="assets/img/slider/frist png copy.jpg" class="d-block w-100" alt="img">-->
        </div>
    </div>


    <div class="modal right fade sidebarModal" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="logo"><a href="#"><span> <img src="<?php echo $slct['weblogo']; ?>" alt="img"></span></a></div>
                    <p>Turacos have much planned for the future, working with great clients and continued software development. If you'd like to join our team, then we'd also love to hear from you.</p>
                    <ul class="modal-contact-info">
                        <li><i class="icofont-google-map"></i> <b><?php echo $slct['address1']; ?></b><?php echo $slct['address2']; ?></li>
                        <li><i class="icofont-ui-call"></i> <b>+91  <?php echo $slct['supportno1']; ?></b>Give us a call</li>
                        <li><i class="icofont-envelope"></i> <b><a></a></b>24/7 online support</li>
                    </ul>
                    <ul class="social-links">
                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="about-area ptb-100 bg-fbf9f8">
        <div class="circle-pattern-2"></div>
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-12">
                    <div class="row about-image">
                        <div class="col-6 col-lg-6 col-md-6">
                            <div class="image">
                                <img src="assets/img/about-img1.jpg" alt="about">
                            </div>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6">
                            <div class="image">
                                <img src="assets/img/about-img2.jpg" alt="about">
                            </div>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6">
                            <div class="image mt-30">
                                <img src="assets/img/about-img3.jpg" alt="about">
                            </div>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6">
                            <div class="image mt-30">
                                <img src="assets/img/about-img4.jpg" alt="about">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-text">

                        <h1>About Us</h1>
                        <p><?php echo $slct['webname']; ?> is India's most trusted digital services portal which provides more than 40+ services like banking, travel, household bill payment, voter pen, and Aadhaar card to its agents, then agents provide these services to their
                            customers and earn commission per transactions. We provide distributors, retailers, master distributors id at very reasonable prices to our agents and provide every possible opportunity to our retailers and distributors to
                            earn with minimum investment and maximum return. We trust that "Our Success" is possible just through" Your Success" so we put our best effort to make you succeed by giving round-the-clock support. Cost-Effective We never take
                            more or undersell our product which means all of our products and services are evaluated according to the Industry standards.</p>
                        <a href="#" class="read-more-btn">View More About us.</a>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="services-area bg ptb-100">
        <div class="container">
            <div class="section-title">

                <h3>Our Services</h3>


            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class=""><img src="assets/img/icon/aadharpay.png" alt="about"></i>
                        </div>
                        <h3>Print Aadhaar Card</h3>


                        <a href="#" class="read-more-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class=""><img src="assets/img/icon/aadharpay.png" alt="about"></i>
                        </div>
                        <h3>Update Your Aadhaar</h3>


                        <a href="#" class="read-more-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class=""><img src="assets/img/icon/aadharpay.png" alt="about"></i>
                        </div>
                        <h3>Aadhaar Services</h3>


                        <a href="#" class="read-more-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class=""><img src="assets/img/voteridicon.png" alt="about"></i>
                        </div>
                        <h3>Print Voter ID Card</h3>

                        <a href="#" class="read-more-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class=""><img src="assets/img/pancardicon.png" alt="about"></i>
                        </div>
                        <h3>Print Pan Card</h3>



                        <a href="#" class="read-more-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class=""><img src="assets/img/dlicon.png" alt="about"></i>
                        </div>
                        <h3>Print Driving License</h3>

                        <a href="#" class="read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="analysis-area ptb-100 bg-fbf9f8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="analysis-form">
                        <h3>Send Message</h3>
                        <form>
                            <div class="form-group">
                                <input type="text" placeholder="Name*" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="Message" placeholder="Message*" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">

                    <div class="single-footer-widget">
                        <h3>Contacts</h3>
                        <ul class="contact-list">
                            <li><span>Address: </span><?php echo $slct['address1']; ?><?php echo $slct['address2']; ?></li>

                            <li><span>Email: </span><a href="mailto:<?php echo $slct['supportemail']; ?>"><?php echo $slct['supportemail']; ?></a></li>


                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>





    <section class="funfacts-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3 col-sm-6 col-md-6">
                    <div class="fun-fact">
                        <i class="icofont-users-alt-5"></i>
                        <p>Active Clients:</p>
                        <h3><span class="count">2150</span>+</h3>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-6 col-md-6">
                    <div class="fun-fact">
                        <i class="icofont-rocket-alt-2"></i>
                        <p>Success Rate:</p>
                        <h3><span class="count">86</span>%</h3>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-6 col-md-6">
                    <div class="fun-fact">
                        <i class="icofont-laptop-alt"></i>
                        <p>Projects Done:</p>
                        <h3><span class="count">550</span>+</h3>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-6 col-md-6">
                    <div class="fun-fact">
                        <i class="icofont-award"></i>
                        <p>Awards:</p>
                        <h3><span class="count">35</span>+</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>













    <footer class="footer-area bg-fbf9f8">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <div class="logo">
                            <a href="<?php echo $slct['weblogo']; ?>"><span> <img src="<?php echo $slct['logo']; ?>"></span></a>
                        </div>
                        <p><?php echo $slct['webname']; ?> is a one-stop b2b digital services provider in india. Which is providing all types of digital services (Aadhar Print ,Pan Print ,Ayushman Print ,Voter Print ,Bihar Service All) at an affordable price with lots of benefits.</p>
                        <ul class="social-links">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                            <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Services</h3>
                        <ul class="services-list">
                            <li><a href="<?php echo $slct['weburl']; ?>">Home</a></li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="policy.php">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Usefull links</h3>
                        <ul class="usefull-links">
                            <li><a href="#">Voter Card</a></li>
                            <li><a href="#">Pan Card</a></li>
                            <li><a href="#">Aadhar Print</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Contacts</h3>
                        <ul class="contact-list">
                            <li><span>Address: </span><?php echo $slct['address1']; ?><?php echo $slct['address2']; ?></li>

                            <li><span>Phone:</span>+91-<?php echo $slct['supportno1']; ?><br/></li>
                            <li><a href="<?php echo $slct['appurl']; ?>"><img src="assets/img/android.png"></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <ul>
                            <li><a href="policy.php">Privacy Policy</a></li>
                            <li><a href="terms-condition.php">Terms&Conditions</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact us</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 text-end">
                        <p>Copyright @ 2022 <?php echo $slct['webname']; ?>. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--<div class="modal fade text-center py-5" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="../indtech.in/wp-content/uploads/2021/04/954812-aadhaarsevakendratwitteraadhaarseva.jpg" alt="BANNER" />
                </div>
            </div>
        </div>
    </div>-->

    <div class="go-top"><i class="icofont-stylish-up"></i></div>

    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/owl.carousel2.thumbs.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/jquery.mixitup.min.js"></script>

    <script src="assets/js/waypoints.min.js"></script>

    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/main.js"></script>
    <script>
        $(window).on('load', function() {
            setTimeout(function() {
                $('#subscribeModal').modal('show');
            }, 1000);
            setTimeout(function() {
                $('.subscribeModal-lg').modal('show');
            }, 1000);
        });
        $('#Reloadpage').click(function() {
            location.reload();
        });
    </script>
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6378b084daff0e1306d84a0e/1gi7n32rf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>