@extends('dashboard.layouts.app')

@section('title', __('models.orders_rejected'))

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
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.orders_rejected') }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">


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
                                                <th>{{ __('models.code') }}</th>
                                                <th>{{ __('models.name') }}</th>
                                                <th>{{ __('models.desc') }}</th>
                                                <th>{{ __('models.status') }}</th>
                                                <th>{{ __('models.created_at') }}</th>
                                                <th class="text-center">{{ __('models.action') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($orders as $order )

                                            <tr>

                                                <td><span class="badge badge-pill badge-light-primary mr-1">{{ $order->code }}</span></td>
                                                <td><span class="badge badge-pill badge-light-info mr-1">{{ $order->name }}</span></td>
                                                <td>
                                                    {{ \Illuminate\Support\Str::limit($order->msg , 10 , '...') }}
                                                    <a href="#"  data-toggle="modal" data-target="#seeMore{{ $order->id }}" title="order status">

                                                        {{ __('models.see_more') }}
                                                    </a>

                                                    @include('dashboard.backend.orders.seemore')
                                                </td>

                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            @if ($order->status == 'complated')
                                                               <span class="badge badge-pill badge-light-success mr-1">{{ $order->status }}</span>
                                                            @elseif ($order->status == 'rejected')
                                                               <span class="badge badge-pill badge-light-danger mr-1">{{ $order->status }}</span>
                                                            @else
                                                               <span class="badge badge-pill badge-light-warning mr-1">{{ $order->status }}</span>
                                                            @endif


                                                        </div>
                                                    </div>
                                                </td>


                                                <td>
                                                    <i data-feather="watch" class="font-medium-3"></i>
                                                    {{ $order->created_at->diffForHumans() }}
                                                </td>


                                                <td class="text-center">
                                                    <div class="btn-group" role="group" aria-label="Second group">

                                                        <a href="{{ route('admin.orders.show', $order->id) }}"
                                                            data-id="{{ $order->id }}"
                                                            class="btn btn-sm btn-info"><i
                                                                class="fa-solid  fa-eye"></i>
                                                        </a>


                                                        <a href="#"  class="btn btn-sm btn-primary" data-toggle="modal" data-target="#order_Edit{{ $order->id }}" title="order status">
                                                            <i class="fa fa-edit" ></i>
                                                        </a>

                                                        @include('dashboard.backend.orders.edit')


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
