@extends('dashboard.layouts.app')

@section('title' , __('models.edit_admin')  )

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.admins.index') }}">{{ __('models.admins') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.edit_admin') }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">{{ __('models.edit_admin') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical needs-validation" id="createCustomerForm"
                                    action="{{ route('admin.admins.update' , $admin->id) }}" method="POST"
                                    enctype="multipart/form-data" novalidate>
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-3">
                                            <label for="name">{{ __('models.name') }}</label>
                                                <input type="text" id="name" class="form-control" name="name"
                                                    value="{{ old('name' , $admin->name) }}" required/>

                                                @error('name')
                                                    <span class="text-danger">
                                                        <small class="errorTxt">{{ $message }}</small>
                                                    </span>
                                                @enderror

                                        </div>




                                        <div class="col-md-6 col-12 mb-3">

                                            <label for="email">{{ __('models.email') }}</label>
                                            <input type="email" id="email" class="form-control" name="email"
                                                value="{{ old('email' , $admin->email) }}" required  />

                                            @error('email')
                                                <span class="text-danger">
                                                    <small class="errorTxt">{{ $message }}</small>
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="col-md-6 col-12 mb-3">
                                            <label for="password">{{ __('models.password') }}</label>
                                            <input type="password" id="password" class="form-control" name="password"
                                                value="{{ old('password') }}"  />

                                            @error('password')
                                                <span class="text-danger">
                                                    <small class="errorTxt">{{ $message }}</small>
                                                </span>
                                            @enderror
                                        </div>



                                        <div class="col-md-6 col-12 mb-3">
                                                <label for="formFile" class="form-label">{{ __('models.image') }}</label>
                                                <input class="form-control image" type="file" id="formFile"
                                                    name="img" >

                                                @error('img')
                                                    <span class="text-danger">
                                                        <small class="errorTxt">{{ $message }}</small>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="form-group prev">
                                            <img src="{{ asset('storage/'.$admin->img) }}" style="width: 100px"
                                                class="img-thumbnail preview-formFile" alt="">
                                        </div>


                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1">{{ __('models.save') }}</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Vertical form layout section end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    @push('js')
    <script src="{{ asset('dashboard/assets/js/custom/validation/AdminForm.js') }}"></script>
    <script src="{{ asset('dashboard/app-assets/js/custom/preview-image.js') }}"></script>

    @endpush
@endsection
