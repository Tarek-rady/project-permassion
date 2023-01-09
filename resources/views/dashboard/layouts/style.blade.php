<link rel="apple-touch-icon" href="{{ asset('dashboard/app-assets/images/ico/apple-icon-120.png') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

 <!-- BEGIN: Vendor CSS-->
 <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/forms/select/select2.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/vendors.min.css') }}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500&display=swap" rel="stylesheet">
 <!-- END: Vendor CSS-->

 <!-- BEGIN: Theme CSS-->
 @if (App::getLocale() == 'ar')

     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/vendors/css/vendors-rtl.min.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css-rtl/bootstrap.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css-rtl/bootstrap-extended.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css-rtl/colors.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css-rtl/components.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css-rtl/themes/dark-layout.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css-rtl/themes/bordered-layout.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css-rtl/themes/semi-dark-layout.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css-rtl/plugins/forms/form-validation.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css-rtl/pages/page-auth.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css-rtl/custom-rtl.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/css/style-rtl.css') }}">

 @else

     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/bootstrap.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/bootstrap-extended.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/colors.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/components.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/themes/dark-layout.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/themes/bordered-layout.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/themes/semi-dark-layout.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/plugins/forms/form-validation.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/app-assets/css/pages/page-auth.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/css/style.css') }}">

 @endif
<!-- END: Custom CSS-->
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

@stack('css')


