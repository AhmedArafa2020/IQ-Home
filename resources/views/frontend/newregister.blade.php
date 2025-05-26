@extends('frontend.layout.newapp')

@section('content')
    <div class="page-wrapper">
        <main id="content">
            <div class="LoginRegistrPage">
                <div class="row" style="align-items: center;">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="PageImage">
                            <img src="{{ asset('assets/front/new_home/assets/images/IQ/loginpage.jpg') }}" alt="Register">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="PageForm">
                            <div class="tititle">
                                <h1>{{ __('Sign up') }}</h1>
                            </div>

                            @include('includes.admin.form-login')

                            <form id="registerform" action="{{ route('user-register-submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="{{ __('Full Name*') }}" class="form-control" value="{{ old('name') }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="{{ __('Email*') }}" class="form-control" required value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="{{ __('Phone Number*') }}" class="form-control" required value="{{ old('phone') }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="address" placeholder="{{ __('Address*') }}" class="form-control" required value="{{ old('address') }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="{{ __('Password*') }}" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" placeholder="{{ __('Confirm Password*') }}" class="form-control" required>
                                        </div>
                                    </div>

                                    @if($gs->is_capcha == 1)
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                {!! NoCaptcha::display() !!}
                                                {!! NoCaptcha::renderJs() !!}
                                                @error('g-recaptcha-response')
                                                <p class="my-2 text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="bg">
                                                <div class="chiller_cb">
                                                    <label for="termsCheck">{{ __('Accept Terms & Conditions') }}</label>
                                                    <input name="terms" id="termsCheck" type="checkbox" required />
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <button type="submit" class="submit-btn">{{ __('SIGN UP') }}</button>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="orr"><p>{{ __('OR') }}</p></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="swithregister">
                                                <p>{{ __("Already have an account?") }} <a href="{{ route('user.login') }}">{{ __('Log in') }}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input id="processdata" type="hidden" value="{{ __('Processing...') }}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
