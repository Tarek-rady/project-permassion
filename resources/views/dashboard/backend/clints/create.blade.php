@extends('dashboard.layouts.app')

@section('title' , __('models.add_clint')  )

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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.clints.index') }}">{{ __('models.banners') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.add_clint') }}</a>
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
                                    <h2 class="card-title">{{ __('models.add_clint') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical needs-validation" id="createCustomerForm"
                                        action="{{ route('admin.clints.store') }}" method="POST"
                                        enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="row">

                                            {{--  name  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="name">{{ __('models.name') }}</label>
                                                    <input type="text" id="name" class="form-control" name="name"
                                                        value="{{ old('name') }}" required/>

                                                    @error('name')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>



                                             {{--  job_ar  --}}
                                             <div class="col-md-6 col-12 mb-3">
                                                <label for="job_ar">{{ __('models.job_ar') }}</label>
                                                    <input type="text" id="job_ar" class="form-control" name="job_ar"
                                                        value="{{ old('job_ar') }}" required/>

                                                    @error('job_ar')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  job_en  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="job_en">{{ __('models.job_en') }}</label>
                                                    <input type="text" id="job_en" class="form-control" name="job_en"
                                                        value="{{ old('job_en') }}" required/>

                                                    @error('job_en')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  job_de  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="job_de">{{ __('models.job_de') }}</label>
                                                    <input type="text" id="job_de" class="form-control" name="job_de"
                                                        value="{{ old('job_de') }}" required/>

                                                    @error('job_de')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                             {{--  desc ar --}}
                                             <div class="col-md-6 col-12 mb-3">
                                                <label for="desc_ar">{{ __('models.desc_ar') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="desc_ar" name="desc_ar" >{{ old('desc_ar') }}</textarea>

                                                    @error('desc_ar')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  desc en --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="desc_en">{{ __('models.desc_en') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="desc_en" name="desc_en" >{{ old('desc_en') }}</textarea>

                                                    @error('desc_en')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                             {{--  desc_de --}}
                                             <div class="col-md-6 col-12 mb-3">
                                                <label for="desc_de">{{ __('models.desc_de') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="desc_de" name="desc_de" >{{ old('desc_de') }}</textarea>

                                                    @error('desc_de')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            <div class="col-md-6 col-12 mb-3"></div>




                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="formFile" class="form-label">{{ __('models.image') }}</label>
                                                <input class="form-control image" type="file" id="formFile"
                                                    name="img" required>

                                                @error('img')
                                                    <span class="text-danger">
                                                        <small class="errorTxt">{{ $message }}</small>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group prev">
                                                <img src="" style="width: 100px" class="img-thumbnail preview-formFile" alt="">
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
    <script src="{{ asset('dashboard/app-assets/js/custom/preview-image.js') }}"></script>
    @endpush
@endsection
