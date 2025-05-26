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

                <div class="FAQPage">
                    <div class="container">
                        <div class="SectionTitle">
                            <h2>FQA</h2>
                        </div>
                        <div class="FAQItems">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading_1">
                                        <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_1" aria-expanded="true" aria-controls="flush-collapse_1">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                        <img src="{{ asset('assets/front/new_home/assets/images/IQ/circle-arrow-up-01-round.svg') }}">
                                        </button>
                                    </h2>
                                    <div id="flush-collapse_1" class="accordion-collapse collapse show" aria-labelledby="flush-heading_1" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading_2">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_2" aria-expanded="false" aria-controls="flush-collapse_2">
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                        <img src="{{ asset('assets/front/new_home/assets/images/IQ/circle-arrow-up-01-round.svg') }}">
                                        </button>
                                    </h2>
                                    <div id="flush-collapse_2" class="accordion-collapse collapse" aria-labelledby="flush-heading_2" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading_3">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_3" aria-expanded="false" aria-controls="flush-collapse_3">
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                        <img src="{{ asset('assets/front/new_home/assets/images/IQ/circle-arrow-up-01-round.svg') }}">
                                        </button>
                                    </h2>
                                    <div id="flush-collapse_3" class="accordion-collapse collapse" aria-labelledby="flush-heading_3" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading_4">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_4" aria-expanded="false" aria-controls="flush-collapse_4">
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                        <img src="{{ asset('assets/front/new_home/assets/images/IQ/circle-arrow-up-01-round.svg') }}">

                                        </button>
                                    </h2>
                                    <div id="flush-collapse_4" class="accordion-collapse collapse" aria-labelledby="flush-heading_4" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading_5">
                                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_5" aria-expanded="false" aria-controls="flush-collapse_5">
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                        <img src="{{ asset('assets/front/new_home/assets/images/IQ/circle-arrow-up-01-round.svg') }}">

                                        </button>
                                    </h2>
                                    <div id="flush-collapse_5" class="accordion-collapse collapse" aria-labelledby="flush-heading_5" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
and scrambled it to make a type specimen book.</p>
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


            @include('frontend.partials.footer')

        </main>
    </div>

@endsection



