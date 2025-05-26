@extends('frontend.layout.newapp')

@section('content')
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Sidenav Bar -->
        <section class="sidenav-bar">
            <!-- Your existing sidenav content -->
        </section>



    <main id="content">

        <div class="LoginRegistrPage">
            <div class="row" style="align-items: center;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="PageImage">
                        <img src="{{ asset('assets/front/new_home/assets/images/IQ/loginpage.jpg') }}" alt="Login">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="PageForm">
                        <div class="tititle">
                            <h1>{{ __('Log in') }}</h1>
                        </div>

                        @include('alerts.admin.form-login')

                        @if(Session::has('auth-modal'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{ Session::get('auth-modal') }}
                            </div>
                        @endif

                        @if(Session::has('forgot-modal'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{ Session::get('forgot-modal') }}
                            </div>
                        @endif

                        <form action="{{ route('user.login.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email*" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password*" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="bg">
                                            <div class="chiller_cb">
                                                <input name="remember" id="Remmber_ID" type="checkbox" />
                                                <label for="Remmber_ID">{{ __('Remember Me') }}</label>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="modal" value="1">
                                @if(Session::has('auth-modal'))
                                    <input type="hidden" name="auth_modal" value="1">
                                @endif
                                <input id="authdata" type="hidden" value="{{ __('Authenticating...') }}">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="submit">{{ __('LOG IN') }}</button>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="orr">
                                            <p>{{ __('OR') }}</p>
                                        </div>
                                    </div>
                                </div>
                                @if($socialsetting->f_check == 1 || $socialsetting->g_check == 1)
                                    <div class="col-lg-12">
                                        <div class="form-group text-center">
                                            <p>{{ __('Sign In with social media') }}</p>
                                            <div class="social-links">
                                                @if($socialsetting->f_check == 1)
                                                    <a href="{{ route('social-provider','facebook') }}"><i class="fab fa-facebook-f"></i></a>
                                                @endif
                                                @if($socialsetting->g_check == 1)
                                                    <a href="{{ route('social-provider','google') }}"><i class="fab fa-google-plus-g"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="swithregister">
                                            <p>{{ __("I don’t have an account?") }} <br>
                                                <a href="{{ route('user.register') }}">{{ __('Create account') }}</a></p>

                                            <br>
                                            <p><a href="{{ route('user.forgot') }}">{{ __('Lost your password?') }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>



        </main>
@endsection
