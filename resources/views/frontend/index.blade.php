@extends('frontend.app')

@section('content')
  <!-- Start Slider Area -->
  <div id="home" class="rn-slider-area with-particles">
    <div id="particles-js"></div>
    @include('frontend.components.slider')
  </div>
  <!-- End Slider Area -->

  <!-- Start Service Area -->
  @include('frontend.components.service')
  <!-- End Service Area  -->

  <!-- Start Portfolio Area -->
  @include('frontend.components.portfolio')
  <!-- End portfolio Area -->
  <!-- Start Resume Area -->
  @include('frontend.components.resume')
  <!-- End Resume Area -->
  <!-- Start Testimonia Area  -->
  @include('frontend.components.testimonial')
  <!-- End Testimonia Area  -->
  <!-- Start Client Area -->
  @include('frontend.components.client')
  <!-- End client section -->
  <!-- Pricing Area -->
  @include('frontend.components.pricing')
  <!-- pricing area -->
  <!-- Start Blog Area -->
  @include('frontend.components.blog')
  <!-- ENd Blog Area -->

  <!-- Start Contact section -->
  @include('frontend.components.contact')
  <!-- End Contuct section -->

@endsection
