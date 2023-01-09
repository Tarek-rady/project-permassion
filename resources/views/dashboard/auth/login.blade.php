@extends('dashboard.layouts-auth.app')

@section('title', 'تسجيل الدخول')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <!-- Login v1 -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="brand-logo">
                                    <img src="{{ asset('site/images/main/logo.png')}}" alt="logo" />

                                    <h2 class="brand-text text-primary ml-1"><span>IECMT UGmbh</span></h2>
                                </a>

                                <h4 class="card-title mb-1">{{ __('models.welcome') }} 👋</h4>
                                <p class="card-text mb-2">{{ __('models.please_login') }}</p>

                                <form class="auth-login-form mt-2" id="authForm" action="{{ route('admin.login.post') }}"
                                    method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="login-email" class="form-label">{{ __('models.email') }}</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="john@example.com" aria-describedby="email" tabindex="1"
                                            autofocus />

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="errorTxt">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">

                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" class="form-control form-control-merge" id="password"
                                                name="password" tabindex="2"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password" />
                                            <div class="input-group-append">
                                                <span class="input-group-text cursor-pointer"><i
                                                        data-feather="eye"></i></span>
                                            </div>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="errorTxt">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary btn-block"
                                        tabindex="4">{{ __('models.login') }}</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Login v1 -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- END: Content-->

@endsection
