@extends('frontend.layout.newapp')

@section('content')
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Sidenav Bar -->
        <section class="sidenav-bar">
            <!-- Your existing sidenav content -->
        </section>
        <!-- Start Main Content -->
        <main id="content">
            @include('frontend.partials.header')
            @include('partials.global.subscription-popup')

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
                                    <a href="#"><img src="../assets/front/new_home/assets/images/IQ/logo.svg" alt="" title="" /></a>
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
                                        <a href="#"><img src="../assets/front/new_home/assets/images/IQ/Wishlest_Icon.svg" /></a>
                                    </div>
                                    <div class="cart-btn">
                                        <button type="button"><img src="../assets/front/new_home/assets/images/IQ/Cart_Icon.svg" /></button>

                                        <div class="shopping-cart">
                                            <div class="shopping-cart-header">
                                                <i class="flaticon-shopping-cart-2 cart-icon"></i><span class="badge">2</span>
                                                <div class="shopping-cart-total">
                                                    <span class="lighter-text">Total:</span>
                                                    <span class="main-color-text">$60.00</span>
                                                </div>
                                            </div>

                                            <ul class="shopping-cart-items">
                                                <li class="clearfix">
                                                    <img src="images/resource/products/prod-thumb-1.jpg" alt="item1" />
                                                    <span class="item-name">Popular Product</span>
                                                    <span class="item-price">$30.00</span>
                                                    <span class="item-quantity">Quantity: 01</span>
                                                    <a href="shop-single.html" class="product-detail"></a>
                                                </li>

                                                <li class="clearfix">
                                                    <img src="images/resource/products/prod-thumb-2.jpg" alt="item1" />
                                                    <span class="item-name">Popular Product</span>
                                                    <span class="item-price">$30.00</span>
                                                    <span class="item-quantity">Quantity: 01</span>
                                                    <a href="shop-single.html" class="product-detail"></a>
                                                </li>
                                            </ul>

                                            <a href="checkout.html" class="theme-btn btn-style-one"><span class="btn-title">Checkout</span></a>
                                        </div>
                                        <!--end shopping-cart -->
                                    </div>
                                    <div class="Icon-box">
                                        <a href="#"><img src="../assets/front/new_home/assets/images/IQ/compareeIcon.svg" /></a>
                                    </div>

                                    <div class="search-box">
                                        <button class="search-btn" type="button"><img src="../assets/front/new_home/assets/images/IQ/IconSarch.svg" /></button>
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

                <div class="AboutUsPageSec">
                    <div class="UperBox">
                        <div class="DataUpperBox">
                            <div class="container">
                                <div class="SectionTitle">
                                    <h2>About Us</h2>
                                </div>
                                <div class="DEscription">
                                    <p>
                                        At IQ Homes, we're not just building smart homes—we're
                                        shaping the future of everyday living. Based in Qatar, we
                                        specialize in cutting-edge smart home solutions that
                                        bring technology, comfort, and security together under
                                        one roof.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ImageBack">
                            <img src="../assets/front/new_home/assets/images/IQ/BannerAboutUs.jpg">
                        </div>
                    </div>
                    <div class="DowenBox">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="DowenBoxData">
                                        <div class="SectionTitle">
                                            <h2>Our mission</h2>
                                        </div>
                                        <div class="DEscription">
                                            <p>
                                                Our mission is to enhance your daily lifestyle by seamlessly
                                                integrating the latest innovations into every corner of your
                                                home. From interactive robots to intelligent automation
                                                systems, we transform traditional homes into futuristic
                                                living spaces—giving you more convenience, safety, and
                                                effortless control at your fingertips.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="ImageRobobot">
                                        <img src="../assets/front/new_home/assets/images/IQ/robotAboyut.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="GoalsSection">
                    <div class="container">
                        <div class="GolasBox">
                            <div class="SectionTitle">
                                <h2>OUR GOALS</h2>
                            </div>
                            <div class="GoalsItems">
                                <div class="row m-0 row-cols-1 row-cols-xs-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5" style="justify-content: center;">
                                    <div class="col p-0">
                                        <div class="ItemGoal">
                                            <div class="IconGoal">
                                                <div class="Bordercircle">
                                                    <div class="Brderimage">
                                                        <div class="iconImage">
                                                            <img src="../assets/front/new_home/assets/images/IQ/goal_1.svg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="GoalData">
                                                <h2>Innovation at the Core</h2>
                                                <p>We aim to lead in smart tech by constantly introducing new, life- enhancing innovations</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="ItemGoal">
                                            <div class="IconGoal">
                                                <div class="Bordercircle">
                                                    <div class="Brderimage">
                                                        <div class="iconImage">
                                                            <img src="../assets/front/new_home/assets/images/IQ/goal_2.svg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="GoalData">
                                                <h2>Comfort Driven Living</h2>
                                                <p>We make homes easier and more comfortable to live in—because smart should also mean simple</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="ItemGoal">
                                            <div class="IconGoal">
                                                <div class="Bordercircle">
                                                    <div class="Brderimage">
                                                        <div class="iconImage">
                                                            <img src="../assets/front/new_home/assets/images/IQ/goal_3.svg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="GoalData">
                                                <h2>Market Expansion</h2>
                                                <p>From Qatar to the broader Middle East, we’re committed to sharing smart living everywhere</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="ItemGoal">
                                            <div class="IconGoal">
                                                <div class="Bordercircle">
                                                    <div class="Brderimage">
                                                        <div class="iconImage">
                                                            <img src="../assets/front/new_home/assets/images/IQ/goal_4.svg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="GoalData">
                                                <h2>Sustainability Focus</h2>
                                                <p>Our solutions help you reduce energy consumption for a greener lifestyle</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="ItemGoal">
                                            <div class="IconGoal">
                                                <div class="Bordercircle">
                                                    <div class="Brderimage">
                                                        <div class="iconImage">
                                                            <img src="../assets/front/new_home/assets/images/IQ/goal_5.svg" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="GoalData">
                                                <h2>Customer Satisfaction</h2>
                                                <p>From start to finish, we’re here to deliver quality, service, and peace of mind</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <img src="../assets/front/new_home/assets/images/IQ/logo.svg">
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
                                            <img src="../assets/front/new_home/assets/images/IQ/QRImage.svg">
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


            @include('frontend.partials.footer')

        </main>
    </div>
@endsection
