<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('front_end/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('front_end/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://lottiefiles.com/132691-developer" rel="stylesheet">
  
      
      
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('front_end/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front_end/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('front_end/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front_end/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('front_end/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front_end/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front_end/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('front_end/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('front_end/assets/css/style.css') }}" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->

    @include("partials.home_partials._header")

  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
    {{-- @include("partials.home_partials._carousel") --}}
    <!-- End Hero -->
  
  <main id="main">

    @yield("content")

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->

        @include("partials.home_partials._footer")
    <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('front_end/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('front_end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front_end/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('front_end/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('front_end/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('front_end/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('front_end/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- JS File -->
  <script src="{{ asset('front_end/assets/js/main.js') }}"></script>
  {{-- <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script> --}}
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>

</html>