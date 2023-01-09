@extends('dashboard.layouts.app')

@section('title', __('models.order_details'))

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
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.order_details') }}</a>
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
                <table class="datatables-basic table">

                    <tr class="table-info">
                        <th>{{ __('models.code') }}</th>
                        <th>{{ __('models.name') }}</th>
                        <th>{{ __('models.email') }}</th>
                        <th>{{ __('models.phone') }}</th>



                    </tr>



                    <td><span class="badge badge-pill badge-light-primary mr-1">{{ $order->code }}</span></td>
                    <td><span class="badge badge-pill badge-light-info mr-1">{{ $order->name }}</span></td>
                    <td><span class="badge badge-pill badge-light-info mr-1">{{ $order->email }}</span></td>
                    <td><span class="badge badge-pill badge-light-info mr-1">{{ $order->phone }}</span></td>

                </table>


            <br><br><br>

            <table class="datatables-basic table">

                <tr class="table-info">
                    <th>{{ __('models.products') }}</th>
                    <th>{{ __('models.price') }}</th>
                    <th>{{ __('models.categories') }}</th>
                    <th>{{ __('models.sub_categories') }}</th>



                </tr>



                <tr>


                    <td>
                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="{{ $order->product->name }}">
                            <img src="{{ asset('storage/'. $order->product->img) }}" alt="Avatar" height="50" width="50" />
                        </div>

                        <span class="badge badge-pill badge-light-primary mr-1"> {{ $order->product->name }}</span>
                    </td>


                    <td>
                        @if ($order->product->new_price > 0)

                        <span class="badge badge-pill badge-light-info mr-1">{{ $order->product->new_price }}</span>
                        @else
                        <span class="badge badge-pill badge-light-info mr-1">{{ $order->product->price }}</span>

                        @endif
                    </td>

                    <td><span class="badge badge-pill badge-light-primary mr-1">{{ $order->product->category->name }}</span></td>
                    <td><span class="badge badge-pill badge-light-success mr-1">{{ $order->product->subcategory->name }}</span></td>









                </tr>

            </table>




            <br><br><br>



            </div>
        </div>
    </div>
    <!-- END: Content-->
    @push('js')
      <script src="{{ asset('dashboard/app-assets/js/custom/custom-delete.js') }}"></script>
    @endpush
@endsection
{{--  success
active  --}}
