@extends('dashboard.layouts.app')

@section('title', __('models.contact_us'))

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
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.server_email') }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">

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
                                                <th>{{ __('models.subject') }}</th>
                                                <th>{{ __('models.msg') }}</th>
                                                <th>{{ __('models.created_at') }}</th>



                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($contacts as $contact )

                                            <tr>



                                                <td><span class="badge badge-pill badge-light-primary mr-1">{{ $contact->name }}</span></td>
                                                <td><span class="badge badge-pill badge-light-primary mr-1">{{ $contact->email }}</span></td>
                                                <td><span class="badge badge-pill badge-light-primary mr-1">{{ $contact->subject }}</span></td>
                                                <td>

                                                    {{ \Illuminate\Support\Str::limit($contact->msg , 20 , '...') }}
                                                    <a href="#"  data-toggle="modal" data-target="#seeMore{{ $contact->id }}" title="order status">

                                                        {{ __('models.see_more') }}
                                                    </a>

                                                    @include('dashboard.backend.contact.seemore')
                                                </td>


                                                <td>
                                                    <i data-feather="watch" class="font-medium-3"></i>
                                                    {{ $contact->created_at->diffForHumans() }}
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
