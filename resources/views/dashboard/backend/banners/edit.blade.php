@extends('dashboard.layouts.app')

@section('title' , __('models.edit_banner')  )

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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.banners.index') }}">{{ __('models.banners') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.edit_banner') }}</a>
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
                                    <h2 class="card-title">{{ __('models.edit_banner') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical needs-validation" id="createCustomerForm"
                                        action="{{ route('admin.banners.update' , $banner->id) }}" method="POST"
                                        enctype="multipart/form-data" novalidate>
                                        @method('PUT')
                                        @csrf
                                        <div class="row">

                                            {{--  title_ar  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="title_ar">{{ __('models.title_ar') }}</label>
                                                    <input type="text" id="title_ar" class="form-control" name="title_ar"
                                                        value="{{ old('title_ar' , $banner->title_ar) }}" required/>

                                                    @error('title_ar')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  title_en  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="title_en">{{ __('models.title_en') }}</label>
                                                    <input type="text" id="title_en" class="form-control" name="title_en"
                                                        value="{{ old('title_en' , $banner->title_en) }}" required/>

                                                    @error('title_en')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                             {{--  link  --}}
                                             <div class="col-md-6 col-12 mb-3">
                                                <label for="link">{{ __('models.link') }}</label>
                                                    <input type="text" id="link" class="form-control" name="link"
                                                        value="{{ old('link' , $banner->link) }}" required/>

                                                    @error('link')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>


                                            <div class="col-md-6 col-12 mb-3"></div>





                                             {{--  desc ar --}}
                                             <div class="col-md-6 col-12 mb-3">
                                                <label for="desc_ar">{{ __('models.desc_ar') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="desc_ar" name="desc_ar" >{{ old('desc_ar' , $banner->desc_ar) }}</textarea>

                                                    @error('desc_ar')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  desc en --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="desc_en">{{ __('models.desc_en') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="desc_en" name="desc_en" >{{ old('desc_en' , $banner->desc_en) }}</textarea>

                                                    @error('desc_en')
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
                                                <img src="{{ asset('storage/'.$banner->img) }}" style="width: 100px" class="img-thumbnail preview-formFile" alt="">
                                            </div>

                                            {{-- status --}}
                                            <div class="col-6">
                                                <label>{{ __('models.status') }}</label>
                                                <div class="form-group">
                                                    <select class="select1 form-control" id="status" name="status">
                                                          <option value="{{ $banner->status }}"> {{ $banner->status }}</option>

                                                          <option value=""> -- select status --</option>
                                                          <option value="active" {{ 'active' == old('status') ? 'checked' : '' }}>active</option>
                                                          <option value="Inactive" {{ 'Inactive' == old('status') ? 'checked' : '' }}>Inactive</option>

                                                       @error('status') <span class="text-danger">{{ $message }}</span>  @enderror

                                                    </select>
                                                </div>
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
