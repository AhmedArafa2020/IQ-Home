<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>IQ Home</title>
        <link rel="icon" href="../assets/images/IQ/logo.svg" type="image/x-icon" />
        <!-- Stylesheets -->
        <link href="../assets/css/style.css" rel="stylesheet" />
        <link href="../assets/css/responsive.css" rel="stylesheet" />
        <link href="../assets/css/style_en.css" rel="stylesheet" />
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="../assets/js/respond.js"></script><![endif]-->
    </head>

    <body class="ltr">
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>

            <!-- Sidenav Bar -->
            <section class="sidenav-bar">
                <div class="nav-box">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="btn-box">
                                <button class="close-btn"><span class="fa fa-times"></span></button>
                            </div>
                        </div>

                        <!-- .Side Nav -->
                        <nav class="side-nav">
                            <ul class="navigation clearfix" id="nav">
                                <li class="current"><a href="#">Home</a></li>
                                <li class=""><a href="#">Product</a></li>
                                <li class=""><a href="#">About us</a></li>
                                <li class=""><a href="#">Blogs</a></li>
                                <li class=""><a href="#">FAQ</a></li>
                                <li class=""><a href="#">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- /.Side-menu -->

                        <div class="contact-info-box"></div>
                    </div>
                </div>
            </section>
            <!--End Sidenav Bar -->

            <!-- Start Main Content -->
            <main id="content">


                <div class="TopHeaderr">
                    <div class="container">
                        <div class="topheaderContent">
                            <div class="rightSide">
                                <p>Contact & Support : +97470006462</p>
                            </div>
                            <div class="leftSide">
                                <div class="SelectItem">
                                    <select>
                                        <option>EN</option>
                                        <option>AR</option>
                                    </select>
                                </div>
                                <div class="SelectItem">
                                    <select>
                                        <option>QAR</option>
                                        <option>Dollar</option>
                                    </select>
                                </div>
                                <a href="#" class="Sell">Sell</a>
                                <a href="#" class="Login">LOG IN</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Header-->
                <header class="main-header header-style-two">
                    <div class="container">
                        <div class="main-box">
                            <div class="logo-box">
                                <div class="logo">
                                    <a href="#"><img src="../assets/images/IQ/logo.svg" alt="" title="" /></a>
                                </div>
                            </div>

                            <div class="nav-outer">
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="current"><a href="#">Home</a></li>
                                            <li class=""><a href="#">Product</a></li>
                                            <li class=""><a href="#">About us</a></li>
                                            <li class=""><a href="#">Blogs</a></li>
                                            <li class=""><a href="#">FAQ</a></li>
                                            <li class=""><a href="#">Contact us</a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->

                                <div class="outer-box clearfix">
                                    <div class="Icon-box">
                                        <a href="#"><img src="../assets/images/IQ/Wishlest_Icon.svg" /></a>
                                    </div>
                                    <div class="Icon-box">
                                        <a href="cart.html"><img src="../assets/images/IQ/Cart_Icon.svg" /></a>
                                    </div>
                                    <div class="Icon-box">
                                        <a href="#"><img src="../assets/images/IQ/compareeIcon.svg" /></a>
                                    </div>

                                    <div class="search-box">
                                        <button class="search-btn" type="button"><img src="../assets/images/IQ/IconSarch.svg" /></button>
                                    </div>

                                    <!-- Btn box -->
                                    <div class="btn-box no-touch">
                                        <button class="nav-toggler"><span></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!--End Main Header -->

                <!-- Search Popup -->
                <div class="search-popup">
                    <button class="close-search"><span class="fa fa-long-arrow-alt-up"></span></button>
                    <form method="post" action="http://ary-themes.com/html/sinaea/blog.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search" required="" />
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <!-- End Search Popup -->

                <div class="ProfilePage">
                    <div class="container">
                        
                        <div class="BiilingBox">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="imageProfile">
                                        <div class="image">
                                            <a href="../assets/images/IQ/user.jpg" class="lightbox-image" id="Imag_prof_link">
                                                <img src="../assets/images/IQ/user.jpg" id="Image_Profile">
                                            </a>
                                        </div>
                                        <label for="ProfileImage" class="ProfileImagelable">
                                            <img src="../assets/images/IQ/camera.svg">
                                        </label>
                                        <input id="ProfileImage" type="file" class="d-none" onchange="updateProfileImage(this)">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Name*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email *">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Shop Name *">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Password*">
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                
                
                 
                        <div class="SubmitBTN">
                             <button type="submit" class="theme-btn btn-style-two"><span class="btn-title">SAVE </span></button>
                        </div>
                    </div>
                </div>

    
                <div class="Subscribe">
                    <div class="container">
                        <div class="subscribBox">
                            <h2>Sign up to newslatter</h2>
                            <div class="InputGroup">
                                <form action="#" method="post">
                                    <input type="email" class="form-control" placeholder="Enter Your Email">
                                    <button type="submit">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="FoooterNew">
                    <div class="UperFooter">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5" style="justify-content: center;">
                                <div class="col p-0">
                                    <div class="LogoFooterSocial">
                                        <div class="LogoFoot">
                                            <img src="../assets/images/IQ/logo.svg">
                                        </div>
                                        <div class="SocaiakLinks">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-snapchat-ghost"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="WedgitLink">
                                        <h2>Product Category</h2>
                                        <ul>
                                            <li><a href="#">Electronic</a></li>
                                            <li><a href="#">Camera & Photo</a></li>
                                            <li><a href="#">Smart Phone & Table</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="WedgitLink">
                                        <h2>Customer Care</h2>
                                        <ul style="columns: 2;">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Product</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">FQA</a></li>
                                            <li><a href="#">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="WedgitLink">
                                        <p>Got Questions ?</p>
                                        <h2>Call us 24/7!</h2>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-phone-alt"></i> +974 70006462</a></li>
                                            <li><a href="#"><i class="fas fa-map-marker-alt"></i>  Doha, Qatar</a></li>
                                            <li><a href="#"><i class="fas fa-envelope"></i>  info@iqhomes.qa</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="WedgitLink">
                                        <div class="QRImage">
                                            <img src="../assets/images/IQ/QRImage.svg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="CoopyWrite">
                        <p>Copyright © 2025 IQ Homes.</p>
                    </div>
                </div>



            </main>
        </div>

        <!-- Scroll To Top -->
        <div class="scroll-to-top scroll-to-target" data-target="html">
            <img src="../assets/images/jamec/Vector_d_o.svg" />
        </div>


        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/owl.js"></script>
        <script src="../assets/js/wow.js"></script>
        <script src="../assets/js/mixitup.js"></script>
        <script src="../assets/js/appear.js"></script>
        <script src="../assets/js/jquery.stellar.min.js"></script>
        <script src="../assets/js/jquery.fancybox.js"></script>
        <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="../assets/js/swiper.min.js"></script>
        <script src="../assets/js/TweenMax.min.js"></script>
        <script src="../assets/js/script.js"></script>
        <script src="../assets/libs/aos/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <script>
        document.addEventListener("DOMContentLoaded", function () {
            const paymentRadios = document.querySelectorAll('input[name="payment"]');
            const cardInputs = document.querySelector('.CardInputs');

            paymentRadios.forEach(function (radio) {
                radio.addEventListener('change', function () {
                    if (document.getElementById('payment_2').checked) {
                        cardInputs.style.display = 'block';
                    } else {
                        cardInputs.style.display = 'none';
                    }
                });
            });
        });
        </script>

        <script>
            function updateProfileImage(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#Imag_prof_link").attr("href", e.target.result);
                        $("#Image_Profile").attr("src", e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </body>
</html>
