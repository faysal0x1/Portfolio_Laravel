<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lendex - Personal Portfolio Bootstrap Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.ico') }}" />

    <!-- CSS
    ============================================ -->
    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    {{--
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" /> --}}

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/icofont.min.css') }}" /> 

    <!-- Plugin CSS (Global Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css">
    
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css" /> -->

    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Minify Version -->
    {{-- <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css"> --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.min.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js"></script>
</head>



<body>





    <main class="main-wrapper">


        @include('frontend.body.header')


        <!-- Offcanvas Overlay -->
        <div class="offcanvas-overlay"></div>


        @yield('content')


        <!-- ...::: Start Footer Section :::... -->
        @include('frontend.body.footer')
        <!-- ...::: End Footer Section :::... -->

        <!-- material-scrolltop button -->
        <button class="material-scrolltop" type="button"></button>
    </main>







    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <!-- <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script> -->

    {{-- <script src="assets/js/vendor/bootstrap.bundle.min.js"></script> --}}

    <!--Plugins JS-->
    <!-- 
    <script src="assets/js/plugins/jquery.appear.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <script src="assets/js/plugins/images-loaded.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/counter.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script> -->

    <!-- Minify Version -->
    {{-- <script src="assets/js/plugins/swiper-bundle.min.js"></script> --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="{{ asset('frontend/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
    }
    @endif 
    </script>
    <!--Main JS (Common Activation Codes)-->

    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>