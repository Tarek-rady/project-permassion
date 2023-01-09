@extends('dashboard.layouts.app')

@section('title', __('models.admins'))

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
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.admins') }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a Admin">

                                @if(auth()->user()->hasPermission('users-create'))
                                    <a href="{{ route('admin.admins.create') }}" class="btn btn-primary">
                                        <span><i class="fa fa-plus"></i></span>
                                        <span> {{ __('models.add_admin') }} </span>
                                    </a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic table -->
                <section id="basic-datatable">

                    <!-- Company Table Card -->
                    <div class="col-lg-12 col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('models.admins') }}</th>
                                                <th>{{ __('models.email') }}</th>
                                                <th>{{ __('models.roles') }}</th>


                                                <th class="text-center">{{ __('models.action') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($admins as $admin )

                                            <tr>

                                                <td>

                                                    @if ($admin->img)
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="{{ $admin->name }}">
                                                            <img src="{{ asset('storage/'. $admin->img) }}" alt="Avatar" height="50" width="50" />
                                                        </div>
                                                    @else
                                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="{{ $admin->name }}">
                                                            <img src="{{ asset('storage/admins/1.png') }}" alt="Avatar" height="50" width="50" />
                                                        </div>
                                                    @endif
                                                </td>

                                                <td><span class="badge badge-pill badge-light-primary mr-1">{{ $admin->email }}</span></td>
                                                <td>
                                                    @foreach ($admin->roles as $adminRole)
                                                      <span class="badge badge-pill badge-light-primary mr-1">{{ $adminRole->name }}</span>
                                                    @endforeach
                                                </td>






                                                <td class="text-center">
                                                    <div class="btn-group" role="group" aria-label="Second group">

                                                        @if(auth()->user()->hasPermission('users-update'))
                                                            <a href="{{ route('admin.admins.edit', $admin->id) }}"
                                                                class="btn btn-sm btn-primary"><i
                                                                    class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                        @endif

                                                        @if(auth()->user()->hasPermission('users-delete'))
                                                            <a href="{{ route('admin.admins.destroy', $admin->id) }}"
                                                                data-id="{{ $admin->id }}"
                                                                class="btn btn-sm btn-danger item-delete"><i
                                                                    class="fa-solid fa-trash-can"></i>
                                                            </a>
                                                        @endif
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
                <!--/ Basic table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @push('js')
      <script src="{{ asset('dashboard/app-assets/js/custom/custom-delete.js') }}"></script>
    @endpush
@endsection
