<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="GeniusCart-New - Multivendor Ecommerce system">
    <meta name="author" content="GeniusOcean">

    @if (isset($page->meta_tag) && isset($page->meta_description))
        <meta name="keywords" content="{{ $page->meta_tag }}">
        <meta name="description" content="{{ $page->meta_description }}">
    <title>@yield('title', 'IQ Home')</title>
    @elseif(isset($blog->meta_tag) && isset($blog->meta_description))
        <meta property="og:title" content="{{ $blog->title }}" />
        <meta property="og:description"
              content="{{ $blog->meta_description != null ? $blog->meta_description : strip_tags($blog->meta_description) }}" />
        <meta property="og:image" content="{{ asset('assets/images/blogs/' . $blog->photo) }}" />
        <meta name="keywords" content="{{ $blog->meta_tag }}">
        <meta name="description" content="{{ $blog->meta_description }}">
        <title>{{ $gs->title ?? 'IQ-Home'  }}</title>
    @elseif(isset($productt))
        <meta name="keywords" content="{{ !empty($productt->meta_tag) ? implode(',', $productt->meta_tag) : '' }}">
        <meta name="description"
              content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}">
        <meta property="og:title" content="{{ $productt->name }}" />
        <meta property="og:description"
              content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}" />
        <meta property="og:image" content="{{ asset('assets/images/thumbnails/' . $productt->thumbnail) }}" />
        <meta name="author" content="GeniusOcean">
        <title>{{ substr($productt->name, 0, 11) . '-' }}{{ $gs->title }}</title>
    @else
        <meta property="og:title" content="{{ $gs->title }}" />
        <meta property="og:image" content="{{ asset('assets/images/' . $gs->logo) }}" />
        <meta name="keywords" content="{{ $seo->meta_keys }}">
        <meta name="author" content="GeniusOcean">
        <title>{{ $gs->title ?? 'IQ-Home' }}</title>
    @endif

{{--    <link rel="icon" type="image/x-icon" href="{{ asset('assets/front/new_home/assets/images/IQ/' . $gs->favicon) }}" />--}}
    <link rel="icon" href="../assets/front/new_home/assets/images/IQ/logo.svg " type="image/x-icon" />


    <!-- Google Font -->
    @if ($default_font->font_value)
        <link
            href="https://fonts.googleapis.com/css?family={{ $default_font->font_value }}:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">
    @else
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap"
              rel="stylesheet">
    @endif
    <link rel="icon" href="{{ asset('assets/front/new_home/assets/images/IQ/logo.png') }}" type="image/x-icon">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/front/new_home/assets/css/style.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/front/new_home/assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/new_home/assets/css/style_en.css') }}" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="{{ asset('assets/front/new_home/assets/js/respond.js') }}"></script>
    <![endif]-->

    @yield('head')
</head>

<body class="ltr">
@yield('content')
<div class="scroll-to-top scroll-to-target" data-target="html">
    <img src="{{ asset('assets/front/new_home/assets/images/jamec/Vector_d_o.svg') }}" />

</div>
<!-- Scripts -->
<script src="{{ asset('assets/front/new_home/assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/front/new_home/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/front/new_home/assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/front/new_home/assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/front/new_home/assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/front/new_home/assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/front/new_home/assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('assets/front/new_home/assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/front/new_home/assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/front/new_home/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/front/new_home/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/front/new_home/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/front/new_home/assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/front/new_home/assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/front/new_home/assets/libs/aos/aos.js') }}"></script>
    <script>
        AOS.init();
        // Your other scripts
    </script>

@yield('scripts')
<!-- Scroll To Top -->

</body>
</html>
