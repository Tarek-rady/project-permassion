@extends('dashboard.layouts.app')

@section('title', __('models.rates'))

@push('css')
 <style>
    .rate{
        color: rgb(255, 196, 0);
    }
 </style>
@endpush

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
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.rates') }}</a>
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
                                                <th>{{ __('models.name') }}</th>
                                                <th>{{ __('models.email') }}</th>
                                                <th>{{ __('models.phone') }}</th>
                                                <th>{{ __('models.rates') }}</th>
                                                <th>{{ __('models.msg') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($product->rates as $rate )

                                            <tr>

                                                <td><span class="badge badge-pill badge-light-primary mr-1">{{ $rate->name }}</span></td>
                                                <td><span class="badge badge-pill badge-light-primary mr-1">{{ $rate->email }}</span></td>
                                                <td><span class="badge badge-pill badge-light-primary mr-1">{{ $rate->phone }}</span></td>
                                                <td>



                                                    @for ($i =1 ; $i < 6 ; $i++)
                                                        <span class="fa fa-star {{ $rate->rate >= $i ? 'rate' : ''}}" ></span>
                                                    @endfor





                                                </td>
                                                <td>
                                                    @if (strlen($rate->msg) < 20)
                                                    <span class="badge badge-pill badge-light-primary mr-1">{{ $rate->msg }}</span>
                                                    @else

                                                    {{ \Illuminate\Support\Str::limit($rate->msg , 10 , '...') }}
                                                    <a href="#"  data-toggle="modal" data-target="#seeMore{{ $rate->id }}" title="order status">

                                                        {{ __('models.see_more') }}
                                                    </a>

                                                    @include('dashboard.backend.rates.seemore')


                                                    @endif

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
