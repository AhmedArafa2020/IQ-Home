
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

                <div class="ProductsPage">
                    <div class="container">
                        <div class="SectionTitle">
                            <h2>Product</h2>
                        </div>
                        <div class="ProductItems">
                            <div class="catName">
                                <h2>Electronics</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_1.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Persing sensor</h2>
                                                <p>3000 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_2.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Door sensor</h2>
                                                <p>2700 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" >
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_3.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Smoke sensor</h2>
                                                <p>2100 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_4.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>loona robot on floor</h2>
                                                <p>2700 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_5.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Persing sensor</h2>
                                                <p>3000 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_6.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Door sensor</h2>
                                                <p>2700 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon ">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_7.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Smoke sensor</h2>
                                                <p>2100 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_8.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>loona robot on floor</h2>
                                                <p>2700 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="catName">
                                <h2>Electronics</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_9.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Persing sensor</h2>
                                                <p>3000 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_10.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Door sensor</h2>
                                                <p>2700 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon ">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="catName">
                                <h2>Electronics</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_11.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Persing sensor</h2>
                                                <p>3000 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_12.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Door sensor</h2>
                                                <p>2700 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon ">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_13.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Persing sensor</h2>
                                                <p>3000 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">
                                             <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_14.png') }}" >
                                        </div>
                                        <div class="imageShape">
                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Door sensor</h2>
                                                <p>2700 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon ">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">

                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_15.png') }}" >
                                        </div>
                                        <div class="imageShape">

                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Persing sensor</h2>
                                                <p>3000 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon">
                                           <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" >
                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="ProductItem">
                                        <div class="Image">

                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_16.png') }}" >
                                        </div>
                                        <div class="imageShape">

                                            <img  src="{{ asset('assets/front/new_home/assets/images/IQ/prod_undershape.svg') }}" >
                                        </div>
                                        <div class="prodData">
                                            <div class="titilePrice">
                                                <h2>Door sensor</h2>
                                                <p>2700 <span>$</span></p>
                                            </div>
                                            <div class="desc">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                                            </div>
                                            <div class="butonAction">
                                                <button type="button" class="addcart">Add to cart</button>
                                                <button type="button" class="buynow">Buy now</button>
                                            </div>
                                        </div>
                                        <span class="FaveIcon ">
                                            <img class="Full_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_o.svg') }}" alt="Products">

                                            <img class="alt_image" src="{{ asset('assets/front/new_home/assets/images/IQ/heart_f.svg') }}" alt="Products">

                                        </span>
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

