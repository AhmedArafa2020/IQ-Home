
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
                                @foreach($blogs as $blog)
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="BogItem">
                                            <div class="BogImage">
                                                <img src="{{ $blog->photo ? asset('assets/images/blogs/'.$blog->photo) : asset('assets/images/noimage.png') }}" alt="{{ $blog->title }}">
                                            </div>
                                            <div class="DataLayer">
                                                <div class="BlogCat">
                                                    <p><span>{{ optional($blog->category)->name ?? 'Uncategorized' }}</span> | <span>{{ date('d F Y', strtotime($blog->created_at)) }}</span></p>
                                                </div>
                                                <div class="BogCOntent">
                                                    <p>{{ Str::limit(strip_tags($blog->details), 100) }}</p>
                                                    <a href="{{ route('front.blogshow', $blog->slug) }}">Learn More <img src="{{ asset('assets/front/new_home/assets/images/IQ/arrow90.svg') }}"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="col-lg-12 mt-3">
                            <div class="d-flex justify-content-center align-items-center pt-3">
                                {{ $blogs->links() }}
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
