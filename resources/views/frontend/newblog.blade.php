
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





                <div class="BlogsPag">
                    <div class="BolgsDataBox">
                        <div class="container">
                            <div class="SectionTitle">
                                <h2>Blogs</h2>
                            </div>
                            <div class="BlogsInfoos">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="BogItem">
                                            <div class="BogImage">
                                                <img src="{{ asset('assets/front/new_home/assets/images/IQ/blog_1.jpg') }}">
                                            </div>
                                            <div class="DataLayer">
                                                <div class="BlogCat">
                                                    <p><span>Articles </span>| <span>11 January 2023</span></p>
                                                </div>
                                                <div class="BogCOntent">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    <a href="blog_details.html">Learn More <img src="{{ asset('assets/front/new_home/assets/images/IQ/arrow90.svg') }}"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="BogItem">
                                            <div class="BogImage">
                                                <img src="{{ asset('assets/front/new_home/assets/images/IQ/blog_4.jpg') }}">
                                            </div>
                                            <div class="DataLayer">
                                                <div class="BlogCat">
                                                    <p><span>Articles </span>| <span>11 January 2023</span></p>
                                                </div>
                                                <div class="BogCOntent">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    <a href="blog_details.html">Learn More <img src="{{ asset('assets/front/new_home/assets/images/IQ/arrow90.svg') }}"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="BogItem">
                                                    <div class="BogImage">
                                                        <img src="{{ asset('assets/front/new_home/assets/images/IQ/blog_2.jpg') }}">
                                                    </div>
                                                    <div class="DataLayer">
                                                        <div class="BlogCat">
                                                            <p><span>Articles </span>| <span>11 January 2023</span></p>
                                                        </div>
                                                        <div class="BogCOntent">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <a href="blog_details.html">Learn More <img src="{{ asset('assets/front/new_home/assets/images/IQ/arrow90.svg') }}"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="BogItem">
                                                    <div class="BogImage">
                                                        <img src="{{ asset('assets/front/new_home/assets/images/IQ/blog_3.jpg') }}">
                                                    </div>
                                                    <div class="DataLayer">
                                                        <div class="BlogCat">
                                                            <p><span>Articles </span>| <span>11 January 2023</span></p>
                                                        </div>
                                                        <div class="BogCOntent">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <a href="blog_details.html">Learn More <img src="{{ asset('assets/front/new_home/assets/images/IQ/arrow90.svg') }}"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="BogItem">
                                                    <div class="BogImage">
                                                        <img src="{{ asset('assets/front/new_home/assets/images/IQ/blog_5.jpg') }}">
                                                    </div>
                                                    <div class="DataLayer">
                                                        <div class="BlogCat">
                                                            <p><span>Articles </span>| <span>11 January 2023</span></p>
                                                        </div>
                                                        <div class="BogCOntent">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <a href="blog_details.html">Learn More <img src="{{ asset('assets/front/new_home/assets/images/IQ/arrow90.svg') }}"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="BogItem">
                                                    <div class="BogImage">
                                                        <img src="{{ asset('assets/front/new_home/assets/images/IQ/blog_6.jpg') }}">
                                                    </div>
                                                    <div class="DataLayer">
                                                        <div class="BlogCat">
                                                            <p><span>Articles </span>| <span>11 January 2023</span></p>
                                                        </div>
                                                        <div class="BogCOntent">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <a href="blog_details.html">Learn More <img src="{{ asset('assets/front/new_home/assets/images/IQ/arrow90.svg') }}"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="BatrnImage">
                        <img src=" {{ asset('assets/front/new_home/assets/images/IQ/BlogBattern.svg') }}">

                    </div>
                    <div class="ImageShapes">
                        <img src=" {{ asset('assets/front/new_home/assets/images/IQ/blogshape_right.svg') }}" class="image_1">

                        <img src=" {{ asset('assets/front/new_home/assets/images/IQ/blogshape_left.svg') }}" class="image_2">

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


            @include('frontend.partials.footer')

        </main>
    </div>

@endsection
