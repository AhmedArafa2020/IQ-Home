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

            <!-- FAQ Section -->
            <div class="FAQPage">
                <div class="container">
                    <div class="SectionTitle">
                        <h2>FAQ</h2>
                    </div>
                    <div class="FAQItems">
                        <div class="accordion accordion-flush" id="faqAccordion">
                            @foreach($faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq-heading-{{ $loop->index }}">
                                        <button class="accordion-button fw-medium {{ $loop->first ? '' : 'collapsed' }}"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#faq-collapse-{{ $loop->index }}"
                                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                                aria-controls="faq-collapse-{{ $loop->index }}">
                                            <span>{{ $faq->title }}</span>
                                            <img src="{{ asset('assets/front/new_home/assets/images/IQ/circle-arrow-up-01-round.svg') }}"
                                                 class="accordion-arrow"
                                                 alt="Toggle">
                                        </button>
                                    </h2>
                                    <div id="faq-collapse-{{ $loop->index }}"
                                         class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                         aria-labelledby="faq-heading-{{ $loop->index }}"
                                         data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">

                                            <div class="accordion-body">
                                               <p> {!! clean($faq->details, array('Attr.EnableID' => true)) !!} </p>
                                            </div>
                                    </div>
                                </div>
                            @endforeach
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
