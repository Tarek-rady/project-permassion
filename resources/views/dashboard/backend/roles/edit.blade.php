@extends('dashboard.layouts.app')

@section('title' , __('models.edit_role')  )

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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">{{ __('models.roles') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.edit_role') }}</a>
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
                                    <h2 class="card-title">{{ __('models.edit_role') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical needs-validation" id="createCustomerForm"
                                        action="{{ route('admin.roles.update' , $role->id) }}" method="POST"
                                        enctype="multipart/form-data" novalidate>
                                        @method('PUT')
                                        @csrf
                                        <div class="row">

                                            {{-- name --}}
                                            <div class="col-md-10 col-12 mb-3">
                                                <label for="name">{{ __('models.name') }}</label>
                                                    <input type="text" id="name" class="form-control" name="name"
                                                        value="{{ old('name' , $role->name) }}" required/>

                                                    @error('name')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>


                                            <section id="basic-datatable" style="width: 100%">

                                                <!-- Company Table Card -->
                                                <div class="col-lg-12 col-12">
                                                    <div class="card card-company-table">
                                                        <div class="card-body p-0">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>{{ __('models.model') }}</th>
                                                                            <th>{{ __('models.permissions') }}</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        @foreach (config('laratrust_seeder.roles_structure.owner') as $model=>$permissions)

                                                                        <tr>


                                                                            <td>{{__('models.'. $model)}}</td>

                                                                            <td>
                                                                                <div class="permissions">


                                                                                  @foreach (explode(',' ,$permissions) as $permission)


                                                                                  <input type="checkbox" value="{{$model}}-{{config('laratrust_seeder.permissions_map')[$permission]}}" name="permissions[]"  class="{{$model}}" {{ $role->hasPermission($model . '-' . config('laratrust_seeder.permissions_map')[$permission]) ? 'checked':''}}>
                                                                                  <label>{{__('models.' . $permission)}}</label>


                                                                                  @endforeach

                                                                                </div>
                                                                            </td>







                                                                        </tr>

                                                                        @endforeach


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ Company Table Card -->

                                            </section>














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
