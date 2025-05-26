<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>IQ Home</title>
    <link rel="icon" href="../assets/front/new_home/assets/images/IQ/logo.png" type="image/x-icon" />
    <!-- Stylesheets -->
    <link href="../assets/front/new_home/assets/css/style.css" rel="stylesheet" />
    <link href="../assets/front/new_home/assets/css/responsive.css" rel="stylesheet" />
    <link href="../assets/front/new_home/assets/css/style_en.css" rel="stylesheet" />
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="../assets/front/new_home/assets/js/respond.js"></script><![endif]-->
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
                                    <li class=""><a href="#">Blogs</a></li>
                                    <li class=""><a href="#">FAQ</a></li>
                                    <li class="{{ request()->routeIs('front.newabout') ? 'active' : '' }}">
                                        <a href="{{ route('front.newabout') }}">About us</a>
                                    </li>
                                    <li class="{{ request()->routeIs('front.newcontact') ? 'active' : '' }}">
                                        <a href="{{ route('front.newcontact') }}">Contact us</a>
                                    </li>


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

        <div class="BanerSection">
            <div class="container">
                <div class="BannerBox">
                    <div class="row" style="align-items: center;">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="BannerData">
                                <h1>DISCOVER OUR</h1>
                                <h2>PRODUCTS NOW</h2>
                                <div class="ButtonsBox">
                                    <a href="#" class="theme-btn btn-style-two"><span class="btn-title">Shop Now</span></a>
                                    <a href="{{ route('front.newabout') }}" class="theme-btn btn-style-one"><span class="btn-title">About us</span></a>




                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="BanerImageBox">
                                <div class="Imagess">
                                    <img src="../assets/front/new_home/assets/images/IQ/Banner_Title.svg" class="ImageText" />
                                    <img src="../assets/front/new_home/assets/images/IQ/RobotBanner.svg" class="ImageRobot" />
                                </div>
                                <div class="ShabeUndrmages">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="BannerBanntern">
                    <img src="../assets/front/new_home/assets/images/IQ/Banner_Banntern.svg" />
                </div>
            </div>
        </div>

        <div class="AboutSection">
            <div class="container">
                <div class="row" style="align-items: center;">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="AboutImage">
                            <img src="../assets/front/new_home/assets/images/IQ/AboutImage.png" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="DataAbout">
                            <div class="SectionTitle">
                                <h2>ABOUT US</h2>
                            </div>
                            <div class="DEscription">
                                <p>
                                    At IQ Homes, we're not just building smart homes—we're shaping the future of everyday living. Based in Qatar, we specialize in cutting-edge smart home solutions that bring technology, comfort, and
                                    security together under one roof. Our mission is to enhance your daily lifestyle by seamlessly integrating the latest innovations into every corner of your home. From interactive robots to
                                    intelligent automation systems, we transform traditional homes into futuristic living spaces—giving you more convenience, safety, and effortless control at your fingertips
                                </p>
                            </div>
                            <a href="{{ route('front.newabout') }}" class="theme-btn btn-style-two"><span class="btn-title">See More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="SmartHome">
            <div class="container">
                <div class="SmartHomBox">
                    <div class="row" style="align-items: center;">
                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                            <div class="SmartDataBox">
                                <div class="SectionTitle">
                                    <h2>
                                        SMART HOME <br />
                                        SYSTEMS
                                    </h2>
                                </div>
                                <div class="DEscription">
                                    <p>
                                        We help you transform your home into a connected space you can manage from anywhere Our advanced automation systems allow you to control lighting, climate, security and appliances—all from
                                        your smartphone
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                            <div class="ImageToltipBox">
                                <div class="ImageBox">
                                    <img src="../assets/images/IQ/smarthome.png" />
                                </div>
                                <div class="ToltipItems">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="ItemTolTip play-now" style="top: 55%; left: 20%;"><span class="ripple"></span></button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="ItemTolTip play-now" style="top: 20%; left: 55%;"><span class="ripple"></span></button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="ItemTolTip play-now" style="top: 15%; right: 15%;"><span class="ripple"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="OurVissionSection">
            <div class="SectionBoxData">
                <div class="container">
                    <div class="row" style="align-items: center;">
                        <div class="col-lg-5 col-md-5 col-sm-15 col-xs-12">
                            <div class="ImageBox">
                                <img src="../assets/front/new_home/assets/images/IQ/visisonShape.png" class="Image_1" />
                                <img src="../assets/front/new_home/assets/images/IQ/robotvission.png" class="Image_2" />
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="VissionBoxData">
                                <div class="SectionTitle">
                                    <h2>OUR VISION</h2>
                                </div>
                                <div class="DEscription">
                                    <p>
                                        To become the leading smart home solutions provider in Qatar and the Middle East, delivering innovative technologies that enhance everyday life. We aim to redefine modern living by blending
                                        comfort with intelligent control, making every home smarter, more efficient, and easier to manage.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="SectionBattern">
                <img src="../assets/front/new_home/assets/images/IQ/OurVessionBatern.svg" />
            </div>
        </div>

        <div class="MakesDeffrentSection">
            <div class="container">
                <div class="SectionTitle text-center">
                    <h2>WHAT MAKES US DIFFERENT</h2>
                </div>
                <div class="DEscription">
                    <p>AT IQ HOMES, WE GO FAR BEYOND SELLING DEVICES—WE PROVIDE COMPLETE SMART EXPERIENCES. WE BELIEVE THAT TECHNOLOGY SHOULD SERVE PEOPLE SIMPLIFY THEIR LIVES, AND CREATE JOY AT HOME. HERE’S WHAT SETS US APART</p>
                </div>

                <div class="MakesItems">
                    <div class="row" style="justify-content: center;">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="ItemMake">
                                <div class="Icon">
                                    <img src="../assets/front/new_home/assets/images/IQ/Make_1.svg" />
                                </div>
                                <h2>PIONEERS IN SMART LIVING</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="ItemMake">
                                <div class="Icon">
                                    <img src="../assets/front/new_home/assets/images/IQ/Make_2.svg" />
                                </div>
                                <h2>TOP-TIER GLOBAL PRODUCTS</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="ItemMake">
                                <div class="Icon">
                                    <img src="../assets/front/new_home/assets/images/IQ/Make_3.svg" />
                                </div>
                                <h2>CUSTOMIZED SMART SOLUTIONS</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="ItemMake">
                                <div class="Icon">
                                    <img src="../assets/front/new_home/assets/images/IQ/Make_4.svg" />
                                </div>
                                <h2>EXPERT TEAM OF ENGINEERS</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="ItemMake">
                                <div class="Icon">
                                    <img src="../assets/front/new_home/assets/images/IQ/Make_5.svg" />
                                </div>
                                <h2>EXCEPTIONAL AFTER- SALES SUPPOR</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="ItemMake">
                                <div class="Icon">
                                    <img src="../assets/front/new_home/assets/images/IQ/Make_6.svg" />
                                </div>
                                <h2>TOTAL PRIVACY & CYBERSECURITY</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="ItemMake">
                                <div class="Icon">
                                    <img src="../assets/front/new_home/assets/images/IQ/Make_7.svg" />
                                </div>
                                <h2>A HUMAN TOUCH</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="Whatweoffer">
            <div class="container">
                <div class="whatweeofferBox">
                    <div class="DataBox">
                        <div class="row m-0" style="align-items: center;">
                            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12 p-0">
                                <div class="DataOffer">
                                    <div class="SectionTitle">
                                        <h2>WHAT WE OFFER</h2>
                                    </div>
                                    <div class="DEscription">
                                        <p>
                                            IQ Homes combines smart technology with everyday comfort to deliver a connected secure, and interactive home experience We offer a wide range of smart systems and robots designed to make
                                            your life easier and more enjoyable
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 p-0">
                                <div class="ImageBox">
                                    <img src="../assets/front/new_home/assets/images/IQ/whatweeoffer.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="LayerImage">
                        <img src="../assets/front/new_home/assets/images/IQ/whatweofferBattern.png" />
                    </div>
                </div>
            </div>
        </div>

        <div class="InterActive">
            <div class="container">
                <div class="UpperBox">
                    <div class="SectionTitle text-center">
                        <h2>INTERACTIVE ROBOTS</h2>
                    </div>
                    <div class="DEscription">
                        <p>
                            We offer a selection of fun, friendly, and highly interactive robots—designed to be your personal assistant, playmate, or even family companion
                        </p>
                        <p><img src="../assets/front/new_home/assets/images/IQ/arrowgold.svg" /> <strong>1 Loona – Your Adorable Smart Companion</strong></p>
                        <p>Developed by KEYi Tech, Loona is more than just a gadget—it’s a lively, lovable member of the family</p>
                    </div>
                </div>
                <div class="RobotsInfo">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="ItemInfo leftSide">
                                <div class="Number">
                                    <span>1</span>
                                </div>
                                <div class="Datarob">
                                    <h2>Natural Interaction:</h2>
                                    <p>Loona recognizes faces, responds to voice commands, and explores its environment.</p>
                                </div>
                            </div>
                            <div class="ItemInfo leftSide">
                                <div class="Number">
                                    <span>2</span>
                                </div>
                                <div class="Datarob">
                                    <h2>Expressive Eyes:</h2>
                                    <p>Shows emotions like happiness and sadness for a more human- like connection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="robotImage">
                                <div class="Image">
                                    <img src="../assets/front/new_home/assets/images/IQ/shaperobot.png" />
                                </div>
                                <div class="ShapeCercle">
                                    <img src="../assets/front/new_home/assets/images/IQ/cerclishabe.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="ItemInfo">
                                <div class="Number">
                                    <span>3</span>
                                </div>
                                <div class="Datarob">
                                    <h2>Kid-Friendly:</h2>
                                    <p>Entertains, educates, and engages children with interactive play.</p>
                                </div>
                            </div>
                            <div class="ItemInfo">
                                <div class="Number">
                                    <span>4</span>
                                </div>
                                <div class="Datarob">
                                    <h2>Fun Features:</h2>
                                    <p>Dances, chirps, and performs amusing tricks.</p>
                                </div>
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



    </main>
</div>

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html">
    <img src="../assets/front/new_home/assets/images/jamec/Vector_d_o.svg" />
</div>

<div class="modal fade ModalSmartHome" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="ModalSmartHomeBody">
                    <div class="Image">
                        <img src="../assets/front/new_home/assets/images/IQ/imagesmartpopoup.jpg" />
                    </div>
                    <div class="Description">
                        <p>
                            We help you transform your home into a connected space you can manage from anywhere Our advanced automation systems allow you to control lighting, climate, security and appliances—all from your smartphone
                        </p>
                    </div>
                    <a href="#" class="theme-btn btn-style-two"><span class="btn-title">See More</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../assets/front/new_home/assets/js/jquery.js"></script>
<script src="../assets/front/new_home/assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/front/new_home/assets/js/owl.js"></script>
<script src="../assets/front/new_home/assets/js/wow.js"></script>
<script src="../assets/front/new_home/assets/js/mixitup.js"></script>
<script src="../assets/front/new_home/assets/js/appear.js"></script>
<script src="../assets/front/new_home/assets/js/jquery.stellar.min.js"></script>
<script src="../assets/front/new_home/assets/js/jquery.fancybox.js"></script>
<script src="../assets/front/new_home/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../assets/front/new_home/assets/js/swiper.min.js"></script>
<script src="../assets/front/new_home/assets/js/TweenMax.min.js"></script>
<script src="../assets/front/new_home/assets/js/script.js"></script>
<script src="../assets/front/new_home/assets/libs/aos/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
