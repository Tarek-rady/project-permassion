@extends('dashboard.layouts.app')

@section('title' , __('models.add_product')  )


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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">{{ __('models.admins') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.add_product') }}</a>
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
                                    <h2 class="card-title">{{ __('models.add_product') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical needs-validation" id="createCustomerForm"
                                        action="{{ route('admin.products.store') }}" method="POST"
                                        enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="row">

                                            {{--  name ar  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="name_ar">{{ __('models.name_ar') }}</label>
                                                    <input type="text" id="name_ar" class="form-control" name="name_ar"
                                                        value="{{ old('name_ar') }}" required/>

                                                    @error('name_ar')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  name en  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="name_en">{{ __('models.name_en') }}</label>
                                                    <input type="text" id="name_en" class="form-control" name="name_en"
                                                        value="{{ old('name_en') }}" required/>

                                                    @error('name_en')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>




                                            {{--  price  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="price">{{ __('models.price') }}</label>
                                                    <input type="number" id="price" class="form-control" name="price"
                                                        value="{{ old('price') }}" required/>

                                                    @error('price')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>


                                            {{-- category_id --}}
                                            <div class="col-6">
                                                <label>{{ __('models.categories') }}</label>
                                                <div class="form-group">
                                                    <select class="select1 form-control" id="category_id" name="category_id">
                                                          <option value=""> -- select categories --</option>
                                                        @foreach ($categories as $category )
                                                         <option value="{{$category->id}}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{  $category->name }}</option>
                                                       @endforeach
                                                       @error('category_id') <span class="text-danger">{{ $message }}</span>  @enderror

                                                    </select>
                                                </div>
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

                                            {{--  desc_en --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="desc_en">{{ __('models.desc_en') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="desc_en" name="desc_en" >{{ old('desc_en') }}</textarea>

                                                    @error('desc_en')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>







                                            {{--  img  --}}
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
