@extends('dashboard.layouts.app')

@section('title', __('models.clints'))

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
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.clints') }}</a>
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
                                <a href="{{ route('admin.clints.create') }}" class="btn btn-primary">
                                    <span><i class="fa fa-plus"></i></span>
                                    <span> {{ __('models.add_clint') }} </span>
                                </a>

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


                                             
                                                <th>{{ __('models.clints') }}</th>
                                                <th>{{ __('models.job') }}</th>
                                                <th>{{ __('models.desc') }}</th>
                                                <th>{{ __('models.created_at') }}</th>


                                                <th class="text-center">{{ __('models.action') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($clints as $clint )

                                            <tr>


                                                <td>
                                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="{{ $clint->name }}">
                                                        <img src="{{ asset('storage/'. $clint->img) }}" alt="Avatar" height="50" width="50" />
                                                    </div>
                                                    <span class="badge badge-pill badge-light-primary mr-1"> {{ $clint->name }}</span>

                                                </td>

                                                <td><span class="badge badge-pill badge-light-info mr-1">{{ $clint->job }}</span></td>
                                                <td>

                                                    {{ \Illuminate\Support\Str::limit($clint->desc , 10 , '...') }}
                                                    <a href="#" data-toggle="modal" data-target="#seeMore{{ $clint->id }}" title="order status">

                                                        {{ __('models.see_more') }}
                                                    </a>

                                                    @include('dashboard.backend.clints.seemore')
                                                </td>


                                                <td>
                                                    <i data-feather="watch" class="font-medium-3"></i>
                                                    {{ $clint->created_at->diffForHumans() }}
                                                </td>


                                                <td class="text-center">
                                                    <div class="btn-group" role="group" aria-label="Second group">
                                                                <a href="{{ route('admin.clints.edit', $clint->id) }}"
                                                                    class="btn btn-sm btn-primary"><i
                                                                        class="fa-solid fa-pen-to-square"></i>
                                                                </a>

                                                                <a href="{{ route('admin.clints.destroy', $clint->id) }}"
                                                                    data-id="{{ $clint->id }}"
                                                                    class="btn btn-sm btn-danger item-delete"><i
                                                                        class="fa-solid fa-trash-can"></i>
                                                                </a>
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
