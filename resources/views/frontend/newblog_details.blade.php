
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

            <div class="BlogDetailsPag">
                    <div class="BolgsDataBox">
                        <div class="container">
                            <div class="SectionTitle">
                                <h2>{{ $blog->title }}</h2>
                            </div>
                            <div class="BlogDetailsContnt">
                                <div class="BlogImage">
                                    <img src="{{ $blog->photo ? asset('assets/images/blogs/'.$blog->photo) : asset('assets/images/noimage.png') }}" alt="{{ $blog->title }}">
                                </div>
                                <div class="BlogMeta">
                                    <span class="author">{{ __('By Admin') }}</span>
                                    <span class="date">{{ date('d F Y', strtotime($blog->created_at)) }}</span>
                                    <span class="views">{{ $blog->views }} {{ __('Views') }}</span>
                                    @if($blog->source)
                                        <span class="source">{{ __('Source') }}: {{ $blog->source }}</span>
                                    @endif
                                </div>
                                <div class="BlogDescription">
                                    {!! clean($blog->details, array('Attr.EnableID' => true)) !!}
                                </div>

                                <!-- Share Buttons -->
                                <div class="share-post mt-5">
                                    <span><b>{{ __('Share This Post:') }}</b></span>
                                    <div class="a2a_kit a2a_default_style">
                                        <a class="a2a_button_facebook"></a>
                                        <a class="a2a_button_twitter"></a>
                                        <a class="a2a_button_linkedin"></a>
                                        <a class="a2a_button_whatsapp"></a>
                                        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                    </div>
                                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                                </div>

                                <!-- Disqus Comments -->
                                @if($gs->is_disqus == 1)
                                    <div class="comments mt-5">
                                        <div id="disqus_thread"></div>
                                        <script>
                                            (function() {
                                                var d = document, s = d.createElement('script');
                                                s.src = 'https://{{ $gs->disqus }}.disqus.com/embed.js';
                                                s.setAttribute('data-timestamp', +new Date());
                                                (d.head || d.body).appendChild(s);
                                            })();
                                        </script>
                                        <noscript>
                                            {{ __('Please enable JavaScript to view the') }}
                                            <a href="https://disqus.com/?ref_noscript">{{ __('comments powered by Disqus.') }}</a>
                                        </noscript>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="BatrnImage">
                        <img src="{{ asset('assets/front/new_home/assets/images/IQ/BlogBattern.svg') }}">

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


{{--        <div class="modal fade ModalSmartHome" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--            <div class="modal-dialog modal-dialog-centered">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-body">--}}
{{--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                        <div class="ModalSmartHomeBody">--}}
{{--                            <div class="Image">--}}
{{--                                <img src="../assets/images/IQ/imagesmartpopoup.jpg" />--}}
{{--                            </div>--}}
{{--                            <div class="Description">--}}
{{--                                <p>--}}
{{--                                    We help you transform your home into a connected space you can manage from anywhere Our advanced automation systems allow you to control lighting, climate, security and appliances—all from your smartphone--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="theme-btn btn-style-two"><span class="btn-title">See More</span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

