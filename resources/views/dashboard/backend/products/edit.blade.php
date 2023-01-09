@extends('dashboard.layouts.app')

@section('title' , __('models.edit_product')  )


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
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.edit_product') }}</a>
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
                                    <h2 class="card-title">{{ __('models.edit_product') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical needs-validation" id="createCustomerForm"
                                        action="{{ route('admin.products.update' , $product->id) }}" method="POST"
                                        enctype="multipart/form-data" novalidate>
                                        @method('PUT')
                                        @csrf
                                        <div class="row">

                                            {{--  name ar  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="name_ar">{{ __('models.name_ar') }}</label>
                                                    <input type="text" id="name_ar" class="form-control" name="name_ar"
                                                        value="{{ old('name_ar' , $product->name_ar) }}" required/>

                                                    @error('name_ar')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  name_en  --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="name_en">{{ __('models.name_en') }}</label>
                                                    <input type="text" id="name_en" class="form-control" name="name_en"
                                                        value="{{ old('name_en' , $product->name_en) }}" required/>

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
                                                        value="{{ old('price' , $product->price) }}" required/>

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
                                                        <option value="{{ $product->category_id }}">{{ $product->category->name }}</option>
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
                                                <textarea class="form-control editor" cols="40" rows="10"id="desc_ar" name="desc_ar" >{{ old('desc_ar' , $product->desc_ar) }}</textarea>

                                                    @error('desc_ar')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            {{--  desc_en --}}
                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="desc_en">{{ __('models.desc_en') }}</label>
                                                <textarea class="form-control editor" cols="40" rows="10"id="desc_en" name="desc_en" >{{ old('desc_en', $product->desc_en) }}</textarea>

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
                                                        name="img" >

                                                    @error('img')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                            </div>

                                            <div class="form-group prev">
                                                <img src="{{ asset('storage/'.$product->img) }}" style="width: 100px" class="img-thumbnail preview-formFile" alt="">
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
    <script src="{{ asset('dashboard/app-assets/js/custom/preview-multi-image.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#category_id').on('change', function () {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ URL::to('admin/subcategory-category') }}/" + category_id
                        , type: "GET"
                        , dataType: "json"
                        , success: function (data) {
                            $('#sub_category_id').empty();
                            $('#sub_category_id').append('<option selected disabled > -- Select subCategories... --</option>');
                            $.each(data, function (key, value) {
                                $('#sub_category_id').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                        ,
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>

    @endpush
@endsection
