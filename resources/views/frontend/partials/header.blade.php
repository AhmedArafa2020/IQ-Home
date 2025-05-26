<!-- Top Header Bar -->
<div class="TopHeaderr">
    <div class="container">
        <div class="topheaderContent">
            <div class="rightSide">
                <p>{{ __('Contact & Support') }} : {{ $ps->phone }}</p>
            </div>
            <div class="leftSide">
                <!-- Language Switcher -->
                <div class="SelectItem">
                    <select class="lang-change">
                        @foreach(App\Models\Language::all() as $language)
                            <option value="{{ route('front.language', $language->id) }}"
                                {{ Session::get('language') == $language->id ? 'selected' : '' }}>
                                {{ strtoupper($language->language) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Currency Switcher -->
                <div class="SelectItem">
                    <select class="currency-change">
                        @foreach(App\Models\Currency::all() as $currency)
                            <option value="{{ route('front.currency', $currency->id) }}"
                                {{ Session::get('currency') == $currency->id ? 'selected' : '' }}>
                                {{ $currency->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                @auth
                    @if(Auth::user()->is_vendor == 2)
                        <a href="{{ route('vendor.dashboard') }}" class="Sell">{{ __('Vendor Panel') }}</a>
                    @else
                        <a href="{{ route('vendor.register') }}" class="Sell">{{ __('Sell') }}</a>
                    @endif
                    <a href="{{ route('user.dashboard') }}" class="Login">{{ __('My Account') }}</a>
                @else
{{--                    <a href="{{ route('vendor.register') }}" class="Sell">{{ __('Sell') }}</a>--}}
                    <a href="{{ route('user.login') }}" class="Login">{{ __('LOG IN') }}</a>
                @endauth
            </div>
        </div>
    </div>
</div>

@php
    $categories = App\Models\Category::with('subs')->where('status',1)->get();
@endphp

    <!-- Main Header -->
<header class="main-header header-style-two">
    <div class="container">
        <div class="main-box">
            <div class="logo-box">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/front/new_home/assets/images/IQ/logo.svg') }}" alt="Logo" />
                    </a>
                </div>
            </div>

            <div class="nav-outer">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="{{ request()->is('/') ? 'current' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('front.category') }}">{{ __('Product') }}</a></li>
                            <li><a href="{{ route('front.blog') }}">{{ __('Blogs') }}</a></li>
                            <li><a href="{{ route('front.faq') }}">{{ __('FAQ') }}</a></li>
                            <li class="{{ request()->routeIs('front.newabout') ? 'active' : '' }}">
                                <a href="{{ route('front.newabout') }}">{{ __('About us') }}</a>
                            </li>
                            <li class="{{ request()->routeIs('front.newcontact') ? 'active' : '' }}">
                                <a href="{{ route('front.newcontact') }}">{{ __('Contact us') }}</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End -->

                <div class="outer-box clearfix">
                    <div class="Icon-box">
                        <a href="#"><img src="{{ asset('assets/front/new_home/assets/images/IQ/Wishlest_Icon.svg') }}" alt="Wishlist" /></a>
                    </div>
                    <div class="cart-btn">
                        <button type="button">
                            <img src="{{ asset('assets/front/new_home/assets/images/IQ/Cart_Icon.svg') }}" alt="Cart" />
                        </button>

                        <div class="shopping-cart">
                            <div class="shopping-cart-header">
                                <i class="flaticon-shopping-cart-2 cart-icon"></i><span class="badge">2</span>
                                <div class="shopping-cart-total">
                                    <span class="lighter-text">{{ __('Total:') }}</span>
                                    <span class="main-color-text">$60.00</span>
                                </div>
                            </div>

                            <ul class="shopping-cart-items">
                                <li class="clearfix">
                                    <img src="{{ asset('assets/front/new_home/assets/images/resource/products/prod-thumb-1.jpg') }}" alt="item1" />
                                    <span class="item-name">{{ __('Popular Product') }}</span>
                                    <span class="item-price">$30.00</span>
                                    <span class="item-quantity">{{ __('Quantity:') }} 01</span>
                                    <a href="shop-single.html" class="product-detail"></a>
                                </li>
                            </ul>

                            <a href="checkout.html" class="theme-btn btn-style-one">
                                <span class="btn-title">{{ __('Checkout') }}</span>
                            </a>
                        </div>
                        <!--end shopping-cart -->
                    </div>
                    <div class="Icon-box">
                        <a href="#"><img src="{{ asset('assets/front/new_home/assets/images/IQ/compareeIcon.svg') }}" alt="Compare" /></a>
                    </div>

                    <div class="search-box">
                        <button class="search-btn" type="button">
                            <img src="{{ asset('assets/front/new_home/assets/images/IQ/IconSarch.svg') }}" alt="Search" />
                        </button>
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
<!-- End Main Header -->

<!-- Search Popup -->
<div class="search-popup">
    <button class="close-search"><span class="fa fa-long-arrow-alt-up"></span></button>
    <form id="searchForm" action="{{ route('front.category', [Request::route('category'), Request::route('subcategory'), Request::route('childcategory')]) }}" method="GET">
        <div class="form-group">
            @if (!empty(request()->input('sort')))
                <input type="hidden" name="sort" value="{{ request()->input('sort') }}">
            @endif
            @if (!empty(request()->input('minprice')))
                <input type="hidden" name="minprice" value="{{ request()->input('minprice') }}">
            @endif
            @if (!empty(request()->input('maxprice')))
                <input type="hidden" name="maxprice" value="{{ request()->input('maxprice') }}">
            @endif
            <div id="catSelectForm">
                <input type="text" id="prod_name" class="col form-control search-field" name="search" placeholder="{{ __('Search Product For') }}" value="{{ request()->input('search') }}">

                <select name="category" class="form-control categoris" id="category_select">
                    <option selected>{{ __('All Categories') }}</option>
                    @foreach($categories as $data)
                        <option value="{{ $data->slug }}" {{ Request::route('category') == $data->slug ? 'selected' : '' }}>
                            {{ $data->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End Search Popup -->
<script>
    window.addEventListener('pageshow', function(event) {
        if (event.persisted) {
            const popup = document.querySelector('.search-popup');
            if (popup) {
                popup.style.display = 'none';
                popup.classList.remove('active');
            }
        }
    });
</script>
